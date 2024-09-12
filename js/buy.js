document.addEvenListener('DOMContentLoaded',
    function(){
        const timeoutMinutes = 20;
        const timeoutMilliseconds = timeoutMinutes * 60 * 1000; 
        
        function goToPrevPage(){
            localStorage.removeItem('formData');
            window.history.back();
        }
        
        setTimeout(goToPrevPage(),timeoutMilliseconds);
        const timerDisplay = document.getElementById('timer');
        if (timerDisplay){
            let timeLeft = timeoutMilliseconds;
            const updateTimer = ()=>{
                const minutes = Math.floor(timeLeft/6000);
                
            }
        }
    }

)
