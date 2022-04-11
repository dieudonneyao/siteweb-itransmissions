<script>

    const hero = document.getElementsByClassName('hero__categories');
    console.log(hero);

    for (index = 0; index < hero.length; index++) {

        hero[index].addEventListener('click', function (e){
            this.classList.toggle('active');//fin
        })
    }

</script>
