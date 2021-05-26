var btn = document.querySelector(".btnLotoo");
btn.addEventListener("click",lotto);
btn.addEventListener("click", function(e){ this.setAttribute("disabled","disabled")});

function lotto() {

    
// ******
    var 후보군 = Array(45)
        .fill()
        .map(function(요소,인덱스){
            return 인덱스 += 1;
        });
        console.log(후보군);

        var 셔플 = [];
        while (후보군.length > 0){
            var 이동값 = 후보군.splice(Math.floor(Math.random() * 후보군.length), 1)[0];
            셔플.push(이동값);
        }
        console.log(셔플);
        var 보너스 = 셔플[셔플.length -1];
        
        var 당첨숫자들 = 셔플
        .slice(0,6)
        .sort(function (p,c){ 
            return p - c; 
        });
        console.log('당첨된숫자들', 당첨숫자들, '보너스',보너스);


        var 결과창 = document.getElementById('결과창');

        //다른부분을 매개변수로 겹치는 부분은 함수로 
        function 공색칠하기(숫자, 결과창){
            var 공 = document.createElement('div');
            공.textContent = 숫자;
            공.style.display = 'flex';
            공.style.alignItems = 'center';
            공.style.justifyContent ='center';
       
            공.style.borderRadius = '50%';
            공.style.width= '3.4vw';
            공.style.height='3.4vw';
            공.style.marginRight= '2.1vw';
            공.style.color='white';
            공.style.fontSize='2.1vw';
         
            
            var 배경색;
            if (숫자 <= 10 ){
                배경색 = 'red';
            }else if(숫자<=30){
                배경색 = 'orange'
            }else if(숫자 <= 30){
                배경색 = 'yellow'
            }else if(숫자 <= 40){
                배경색 = 'blue'
            }else{
                배경색 = 'green'
            }
            공.style.background = 배경색;
            결과창.appendChild(공);  
        }
        
     

            // setTimeout(function 비동기콜뱀함수(){
            //     공색칠하기(당첨숫자들[0], 결과창);
            // },1000); 
            // setTimeout(function 비동기콜뱀함수(){
            //     공색칠하기(당첨숫자들[1], 결과창);
            // },2000); 
            // setTimeout(function 비동기콜뱀함수(){
            //     공색칠하기(당첨숫자들[2], 결과창);
            // },3000); 
            // setTimeout(function 비동기콜뱀함수(){
            //     공색칠하기(당첨숫자들[3], 결과창);
            // },4000); 
            // setTimeout(function 비동기콜뱀함수(){
            //     공색칠하기(당첨숫자들[4], 결과창);
            // },5000); 
            // setTimeout(function 비동기콜뱀함수(){
            //     공색칠하기(당첨숫자들[5], 결과창);
            // },6000); 
// 클로저 


            for (var i = 0; i < 당첨숫자들.length; i++) {
                (function 클로저(j) {
                    setTimeout(function(){
                        공색칠하기(당첨숫자들[j],결과창);
                    },(j + 1 )*1000 );
                })(i);
            }
          

            setTimeout(function 비동기콜뱀함수(){
            var 칸 = document.getElementsByClassName('보너스')[0];
            공색칠하기(보너스, 칸);
            },7000); //밀리초
            
        
        
        var 보너스칸 = document.getElementsByClassName('보너스')[0];
        var 보너스공 = document.createElement('div');
        
        보너스칸.appendChild(보너스공);    

// ****
}

       