
<!-- Окно "Связаться с нами"-->
	<div class="modal fade" id="contacts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Связаться с нами</h4>
		  </div>
		  <div class="modal-body">
			<form method="post" id="contacts">
			<fieldset class="form-group">
				<legend>Предпочтительный способ обратной связи</legend>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					Связаться по телефону
				  </label>
				</div>
				<div class="form-check">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
					Отправить ответ письмом на указанную почту
				  </label>
				</div>
			  </fieldset>
			  <div class="form-group">
				  <label for="text-input">Ваше имя</label>
					<input class="form-control" type="text" id="name">
			  </div>
			  <div class="form-group">
				  <label for="text-input">Тема</label>
					<input class="form-control" type="text" id="subject">
			  </div>
			  <div class="form-group">
				<label for="tel-input">Telephone</label>
				<input class="form-control" type="tel" placeholder="891xxxxxxxx" id="tel">
			  </div>  
			  <div class="form-group">
				<label for="exampleInputEmail1">Введите ваш e-mail</label>
				<input type="email" class="form-control" id="email" placeholder="example@mail.ru">
			  </div>
			  <div class="form-group">
				<label for="exampleTextarea">Чем мы можем помочь Вам?</label>
				<textarea class="form-control" id="Textarea" rows="3" placeholder="Задайте свой вопрос"></textarea>
			  </div>
			  
			  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			<button type="submit" class="btn btn-primary">Отправить</button>
		  </div>
			</form>
		  </div>
		</div>
	  </div>
	</div>
	<!-- Окончание окна "Связаться с нами"-->