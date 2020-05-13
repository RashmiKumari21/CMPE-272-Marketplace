<script>
const urlParams = new URLSearchParams(window.location.search);
const username = urlParams.get('username');
username && localStorage.setItem('username',username);
</script>