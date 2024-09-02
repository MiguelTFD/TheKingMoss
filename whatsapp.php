<!--wsp_component_start-->
<link href="css/style.css" rel="stylesheet">
<div class="wsp-master-container">
	<div class="wsp-1-1">
	<div class="inner_wsp-1-1 dnf-inner">
		<div class="wsp-1-2-1">
		   <img class="wsp-1-2-1_img" src="img/icon/TKMLogo.png"/> 
		<p class="usrname"> <span class="user-wsp-name">The King Moss</span>online</p>
		</div>			
		<div class="wsp-1-2-2">
			<div class="wsp-1-2-2-1">
				<p>Hey there 👋<br>
I'm here to help, so let me know what's up and I'll be happy to find a solution 🤓</p>
			</div>
		</div>			
		<div class="wsp-1-2-3">
			<textarea id='message' class="send-label" placeholder="Enter your Message..." inputmode="text"></textarea>
			<button style="color: rgb(255, 255, 255);" onclick="sendMessage()" class="send-icon-lb"><span class="ButtonBase__Overlay-sc-p43e7i-4 cjTloD" style="padding: 6px; border-radius: calc(14px); background-color: rgba(0, 0, 0, 0);"><span class="ButtonBase__Ellipsis-sc-p43e7i-5 dqiKFy"></span><div class="Icon__IconContainer-sc-11wrh3u-0 jOAIgD ButtonBase__ButtonIcon-sc-p43e7i-0 gMSomS"><div><div><svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" class="injected-svg" data-src="https://static.elfsight.com/icons/app-chats-send-message.svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M9.166 7.5a.714.714 0 0 0-.998.83l1.152 4.304a.571.571 0 0 0 .47.418l5.649.807c.163.023.163.26 0 .283l-5.648.806a.572.572 0 0 0-.47.418l-1.153 4.307a.714.714 0 0 0 .998.83l12.284-5.857a.715.715 0 0 0 0-1.29L9.166 7.5Z"></path></svg></div></div></div></span></button>
		</div>
	</div>
	</div>

	<div class="wsp-1-2">
		<button class="btn-base-wsp-contact dfn-wsp">
			<img class="wsp-1-2_wsp-logo" src="img/wsp_light_logo.png"/>
		</button>
	</div>
</div>
<script>
function sendMessage(){
		  let message=document.getElementById('message').value;
		  let phone= '51983929015'
		  let encodedMsg= encodeURIComponent(message);
		  let wspURL= `https://api.whatsapp.com/send?phone=${phone}&text=${encodedMsg}`;
		  window.open(wspURL, '_blank');
		  document.getElementById('message').value = '';
}
  document.querySelector('.btn-base-wsp-contact').addEventListener('click', function() {
            var wspContainer = document.querySelector('.wsp-1-1');
            wspContainer.classList.toggle('show'); // Alternar la clase 'show'
  });
  setTimeout(function() {
            var wspContainer = document.querySelector('.wsp-1-1');
            if (!wspContainer.classList.contains('show')) {
                document.querySelector('.btn-base-wsp-contact').click();
            }
        }, 6000);
</script>
