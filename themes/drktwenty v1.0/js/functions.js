function navbarMenuShow() {

    let classe = 'navbar-menu-show'
    let navbarMenu = document.getElementById( 'navbar-menu' );
    let navbarMenuClasses = navbarMenu.className.split( ' ' );
    let checkClass = navbarMenuClasses.indexOf( 'navbar-menu-show' );

    if( checkClass < 1 ) {
        navbarMenuClasses.push(classe);
        navbarMenu.className = navbarMenuClasses.join(' ');
    } else if( checkClass >= 1 ) {
        navbarMenuClasses.splice(checkClass, 1);
        navbarMenu.className = navbarMenuClasses.join(' ');
    }

}
