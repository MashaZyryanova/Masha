document.addEventListener('DOMContentLoaded',function(){
    var button = document.querySelector('.scroll-to-projects');
    button.addEventListener('click', function(){

        document.querySelector('.web').scrollIntoView({
            behavior: 'smooth'
        });
        
    });
   
});