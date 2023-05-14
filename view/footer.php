<div class="background"></div>
</div>
</div>
<script>
    const background = document.querySelector('.background');
    var max = 4000;
    for (let i = 0; i < max; i++) {
        var myItem = document.createElement('div');
        myItem.classList.add('item');
        background.appendChild(myItem);
    }
</script>
<script src="./src/js/main.js"></script>
</body>

</html>