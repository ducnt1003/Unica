import DefaultLayout from '@/layouts/DefaultLayout.vue'
const routes = [
  {
    path: '/',
    name: 'Homepage',
    component: DefaultLayout,
    redirect: { name: 'Home' },
    children: [
      {
        /** Full page layout routes */
        path: '',
        name: 'Home',
        component: () => import('@/view/Main.vue'),
      },
      {
        /** Full page layout routes */
        path: '/course-detail',
        name: 'Course-Detail',
        component: () => import('@/view/CourseDetail.vue'),
      },
    ]
  },
  {
    path: '/login',
    name: 'Login',
    component: () => import('@/view/Login.vue'),
  },
]

export default routes
