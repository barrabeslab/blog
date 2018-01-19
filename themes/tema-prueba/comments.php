<h3><?php comments_number(
  __('No hay comentarios aún', 'apk'),
  // __('Hay un comentario publicado', 'apk'),
  // __('Hay % comentarios','apk')
 __('Comentarios','apk'),
 __('Comentarios','apk')
);?></h3>

<?php
paginate_comments_links();

//Mostrar formulario de comentarios
comment_form(array(
	'title_reply' => __('', 'apk'), //Cambiar título
  'label_submit' => __('Publicar', 'apk'), //Cambiar texto de botón
  'author_field' => '<p><input id="author" name="author" type="text" value="" size="30" maxlength="245" aria-required="true" required="required aria-required="true" placeholder="' . __('Nombre', 'apk') . '"></input></p>', //Borrar párrafo y label del input author
	'comment_field' => '<textarea id="comment" name="comment" cols="45" rows="4" aria-required="true" placeholder="' . __('Escribe un nuevo comentario', 'apk') . '"></textarea>', //Borrar párrafo y label del textarea
	'comment_notes_before' => '', //Borrar las notas antes del formulario
	'comment_notes_after' => '<p class="comment-notes">' . __( '', 'apk' ) . '</p>' //Editar las notas después del formulario
));

?>
<ol id="comments-list">
<?php
wp_list_comments();
?>
</ol>