<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="container collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#">Hidden brand</a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                           <router-link class="nav-link" to="/">Home</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/blog">Blog</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/about">About us</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/contact">Contact us</router-link>
                        </li>
                        <li v-if="user_email" class="nav-item">
                            <router-link class="nav-link" to="/profile">{{ user_name }}</router-link>
                        </li> 
                        <li class="nav-item">
                            <router-link class="nav-link" to="/login">Log in</router-link>
                        </li> 
                        <li class="nav-item">
                            <router-link class="nav-link" to="/signup">Sign Up</router-link>
                        </li> 
                    </ul>
                    <form class="d-flex mr">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>

export default{
    name: 'Header',
    data()
    {
        return{
                user_name : localStorage.getItem('user_name'),
                user_email : localStorage.getItem('user_email')
        }
    }
}

</script>