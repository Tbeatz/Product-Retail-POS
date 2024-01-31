<template>
    <div class="container mt-5">
      <div class="col-12 text-center">
        <h1>TechvBlogs</h1>
        <a href="https://techvblogs.com?utm_source=blogExampleRepo" target="_blank">Visit For More Blogs</a>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <router-link to="/test" class="navbar-brand">test</router-link>
        <router-link to="/" class="navbar-brand">welcome</router-link>
        <div class="collapse navbar-collapse">
          <div class="navbar-nav"></div>
        </div>
      </div>
    </nav>
    <div class="container mt-5">
      <router-view></router-view>
    </div>
</template>
