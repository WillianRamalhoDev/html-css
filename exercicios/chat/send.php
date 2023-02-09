<script>
  document.querySelector('#form-chat').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var nome = this.elements['nome'].value;
    var mensagem = this.elements['mensagem'].value;
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'chat.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        var divChat = document.querySelector('#chat');
        divChat.innerHTML += xhr.responseText;
        divChat.scrollTop = divChat.scrollHeight;
      }
    };
    xhr.send('nome=' + nome + '&mensagem=' + mensagem);
  });
</script>