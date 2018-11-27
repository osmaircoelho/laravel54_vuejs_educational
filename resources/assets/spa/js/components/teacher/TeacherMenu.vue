<template src="../templates/menu.html"></template>

<script type="application/javascript">

    export default {
        data(){
            return {
                menus: [
                    {name: 'Minhas turmas', routerName: 'class_informations.list'},
                ],
                brandRouteName: 'class_informations.list'
            }
        },
    };

</script>
