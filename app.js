const bar1 = document.getElementById('bars1');
const barDiv = document.getElementById('bars_aside');
var bar2 = document.getElementById('bars');
var aside = document.querySelector('aside');
var cover = document.querySelector('body');
bar1.addEventListener('click', buttonClick);
function buttonClick(){
    barDiv.style.display = 'none';

}

bar2.addEventListener('click', buttonClick2);
function buttonClick2(){
    barDiv.style.display = '';
}

