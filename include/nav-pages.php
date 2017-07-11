<nav>
	<ul class="list-unstyled">
		<li class="<?php if($nav_page == 'sobre'): echo 'active'; endif; ?>"><a href="<?php echo $url; ?>/sobre">Sobre o site</a></li>
		<li class="<?php if($nav_page == 'termo-uso'): echo 'active'; endif; ?>"><a href="<?php echo $url; ?>/termos-de-uso">Termos de uso</a></li>
		<li class="<?php if($nav_page == 'politica-privacidade'): echo 'active'; endif; ?>"><a href="<?php echo $url; ?>/politica-de-privacidade">Política de privacidade</a></li>
		<li class="<?php if($nav_page == 'duvidas-frequentes'): echo 'active'; endif; ?>"><a href="<?php echo $url; ?>/duvidas-frequentes">Dúvidas frequentes</a></li>
		<li class="<?php if($nav_page == 'contato'): echo 'active'; endif; ?>"><a href="<?php echo $url; ?>/contato">Contato</a></li>
	</ul>
</nav>
