<style>
/* Custom CSS */
header {
    background-color: #343a40;
    color: #fff;
    padding: 10px 0;
    height: 80px;
}

.left-nav,
.right-nav {
    display: flex;
    align-items: center;
}

.left-nav a,
.right-nav a {
    text-decoration: none;
    color: #fff;
    margin-right: 10px;
}

@media (max-width: 768px) {
    .left-nav,
    .right-nav {
        display: block;
        text-align: center;
    }
    
    .left-nav a,
    .right-nav a {
        display: block;
        margin-bottom: 10px;
        margin-right: 0;
    }
}


#logo {
        width: auto; /* Set the desired width for the logo */
        height: 200px; /* Maintain aspect ratio */
    }

</style>