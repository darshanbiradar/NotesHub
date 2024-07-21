document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('open-up').addEventListener("click", function() {
        document.querySelector('.bg-modal').style.display = 'flex';
    });
    document.querySelector('.close').addEventListener("click", function() {
        document.querySelector('.bg-modal').style.display = 'none';
    })
    
});
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('open-img').addEventListener("click", function(){
        document.querySelector(".hello").style.display='flex';
        });
    document.getElementById('close-img').addEventListener("click", function(){
            document.querySelector(".hello").style.display='none';
            });
            });
