<?php declare(strict_types=1);

namespace App;

use Exception;

class UserSimilarity
{
    protected $users       = [];
    protected $featureWeight  = 1;
    // protected $priceWeight    = 1;
    // protected $categoryWeight = 1;
    // protected $priceHighRange = 1000;

    public function __construct(array $users)
    {
        $this->users       = $users;
        // $this->priceHighRange = max(array_column($products, 'price'));
    }

    public function setFeatureWeight(float $weight): void
    {
        $this->featureWeight = $weight;
    }

    // public function setPriceWeight(float $weight): void
    // {
    //     $this->priceWeight = $weight;
    // }

    // public function setCategoryWeight(float $weight): void
    // {
    //     $this->categoryWeight = $weight;
    // }

    public function calculateSimilarityMatrix(): array
    {
        $matrix = [];

        foreach ($this->users as $user) {

            $similarityScores = [];

            foreach ($this->users as $_user) {
                if ($user['id'] === $_user['id']) {
                    continue;
                }
                $similarityScores['user_id_' . $_user['id']] = $this->calculateSimilarityScore($user, $_user);
            }
            $matrix['user_id_' . $user['id']] = $similarityScores;
        }
        return $matrix;
    }

    public function getProductsSortedBySimularity(int $userId, array $matrix): array
    {
        $similarities   = $matrix['user_id_' . $userId] ?? null;
        $sortedUsers = [];

        if (is_null($similarities)) {
            throw new Exception('Can\'t find user with that ID.');
        }
        arsort($similarities);

        foreach ($similarities as $userIdKey => $similarity) {
            $id       = intval(str_replace('product_id_', '', $userIdKey));
            $users = array_filter($this->users, function ($user) use ($id) { return $user['id'] === $id; });
            if (! count($users)) {
                continue;
            }
            $user = $users[array_keys($users)[0]];
            $user['similarity'] = $similarity;
            $sortedUsers[] = $user;
        }
        return $sortedUsers;
    }

    protected function calculateSimilarityScore($productA, $productB)
    {
        $productAFeatures = implode('', $productA['tags']);
        $productBFeatures = implode('', $productB['tags']);

        // return array_sum([
        //     (Similarity::hamming($productAFeatures, $productBFeatures) * $this->featureWeight),
        //     (Similarity::euclidean(
        //         Similarity::minMaxNorm([$productA['price']], 0, $this->priceHighRange),
        //         Similarity::minMaxNorm([$productB['price']], 0, $this->priceHighRange)
        //     ) * $this->priceWeight),
        //     (Similarity::jaccard($productA['category']['name'], $productB['category']['name']) * $this->categoryWeight)
        // ]) / ($this->featureWeight + $this->priceWeight + $this->categoryWeight);
        return (Similarity::hamming($productAFeatures, $productBFeatures) * $this->featureWeight);
    }
}