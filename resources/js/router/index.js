import { createRouter,createWebHistory } from 'vue-router'
import routes from './routes'


const router = new createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior() {
        // always scroll to top
        return { top: 0 }
    },
})

export default router
