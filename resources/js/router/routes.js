const routes = [
    {
      /** Full page layout routes */
      path: '/',
      name: 'Home',
      component: () => import('@/view/Main.vue'),
    },
    {
      /** Full page layout routes */
      path: '/course-detail',
      name: 'Course-Detail',
      component: () => import('@/view/CourseDetail.vue'),
    }
]

export default routes
