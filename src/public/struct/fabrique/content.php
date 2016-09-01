<div class="col-md-5">
	<div class="well text-center">
		<h3>Objet Texte</h3>
		<form class="form-horizontal" method="post" action="struct/fabrique/controleurs/creerDocument.php">
			<fieldset class="form-group">
				<label class="col-sm-4">Titre</label>
				<input class="form-control" type="text" name="titre" placeholder="Titre"/>
			</fieldset>

			<fieldset class="form-group">
				<label class="col-sm-4">Auteur</label>
				<input class="form-control" type="text" name="auteur" placeholder="Auteur"/>
			</fieldset>

			<fieldset class="form-group">
				<label class="col-sm-4">Contenu</label>
				<textarea class="form-control" name="contenu" placeholder="Contenu" rows="6"></textarea>
			</fieldset>

			<input type="hidden" name="type" value="texte">

			<fieldset class="form-group">
				<button class="btn btn-primary" type="submit">Envoyer</button>
			</fieldset>
		</form>	
	</div>
	
</div>

<div class="col-md-offset-1 col-md-6">
	<div class="well text-center">
		<h3>Objet Lettre</h3>
		<form class="form-horizontal" method="post" action="struct/fabrique/controleurs/creerDocument.php">
			<fieldset class="form-group">
				<label class="col-sm-4">Titre</label>
				<input class="form-control" type="text" name="titre" placeholder="Titre"/>
			</fieldset>

			<fieldset class="form-group">
				<label class="col-sm-4">Expéditeur</label>
				<input class="form-control" type="text" name="expediteur" placeholder="Expéditeur"/>
			</fieldset>

			<fieldset class="form-group">
				<label class="col-sm-4">Destinataire</label>
				<input class="form-control" type="text" name="destinataire" placeholder="Destinataire"/>
			</fieldset>

			<fieldset class="form-group">
				<label class="col-sm-4">Objet</label>
				<input class="form-control" type="text" name="objet" placeholder="Objet"/>
			</fieldset>

			<fieldset class="form-group">
				<label class="col-sm-4">Contenu</label>
				<textarea class="form-control" name="contenu" placeholder="Contenu" rows="6"></textarea>
			</fieldset>

			<input type="hidden" name="type" value="lettre">

			<fieldset class="form-group">
				<button class="btn btn-primary" type="submit">Envoyer</button>
			</fieldset>
		</form>
	</div>
</div>