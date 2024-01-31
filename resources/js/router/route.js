import Welcome from '.././components/Welcome.vue'
import Test from ".././components/Test.vue";
import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
      path: "/",
      name: "wel",
      component: Welcome,
    },
    {
      path: "/test",
      name: "tes",
      component: Test,
    },
  ];

  const router = createRouter({
      history: createWebHistory(),
      routes,
  });

export default router;
