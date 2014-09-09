<?php
/*
* Painel do Usuário
* Painel para usuários cadastrados no Portal do eleitor
* Imbé, Rio Grande do Sul, Brasil
* Tiago Floriano <tjfreelancer@mail.com>
*
* Este programa e software livre; voce pode redistribui-lo e/ou
* modifica-lo sob os termos da Licenca Publica Geral GNU, conforme
* publicada pela Free Software Foundation; tanto a versao 2 da
* Licenca como (a seu criterio) qualquer versao mais nova.
*
* Este programa e distribuido na expectativa de ser util, mas SEM
* QUALQUER GARANTIA; sem mesmo a garantia implicita de
* COMERCIALIZACAO ou de ADEQUACAO A QUALQUER PROPOSITO EM
* PARTICULAR. Consulte a Licenca Publica Geral GNU para obter mais
* detalhes.
*
* Voce deve ter recebido uma copia da Licenca Publica Geral GNU
* junto com este programa; se nao, escreva para a Free Software
* Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA
* 02111-1307, USA.
*
* Copia da licenca no diretorio licenca/licenca_en.txt
* licenca/licenca_pt.txt
*/

/**
 * Classe upanel
 * Painel do usuário
 */ 
class upanel {
	/**
	 * $this->menu();
	 * Monta menu principal do painel
	 */
	public function menu() {
		?>
	        <div class="btn-group" data-toggle="buttons-radio">
        	        <a onclick="window.location.href='/u/?p=meucadastro'" class="btn btn-success btn-sm" style="font-size: 12px !important;"><i class="glyphicon glyphicon-user"></i> &nbsp;Meu cadastro</a><a onclick="window.location.href='/u/?p=seguindo'" class="btn btn-success btn-sm" style="font-size: 12px !important;"><i class="glyphicon glyphicon-star"></i> &nbsp;Seguindo</a><a onclick="window.location.href='/u/?p=meucandidatos'" class="btn btn-success btn-sm" style="font-size: 12px !important;"><i class="glyphicon glyphicon-heart"></i> &nbsp;Meus candidatos</a><a onclick="window.location.href='<?= wp_logout_url('/u/') ?>'" class="btn btn-success btn-sm" style="font-size: 12px !important;"><i class="glyphicon glyphicon-off"></i> &nbsp;Sair</a>
	        </div>
		<?
	}

	/**
	 * $this->notificacoes();
	 * Exibe atualizações referentes ao cadastro de algum candidato
	 */
	public function notificacoes(){
		//
	}

	/**
	 *
	 */
	public function listaSeguindo(){
		
	}

        /**
         *
         */
        public function addSeguindo($ano,$sqcandidato){

        }

        /**
         *
         */
        public function remSeguindo($idMeuCandidato){

        }

        /**
         *
         */
        public function listaMeuCandidato(){

        }

        /**
         *
         */
        public function addMeuCandidato($ano,$sqcandidato){

        }

        /**
         *
         */
        public function remMeuCandidato($idMeuCandidato){

        }
}

/*
 * Verifica se está logado
 */
if ( is_user_logged_in() ) {
	//chama classe
	$upanel = new upanel();

	//exibe menu
	$upanel->menu();

	//pega variável $p
	$p = $_GET["p"];

	//página inicial do painel
	if($p == ""){
		$upanel->notificacoes();
	}
} else {
	/*
	 * Se não tiver logado, exibe formulário do WordPress
	 */
	$args = array(
        'redirect'       => '/u/', 
        'form_id'        => 'loginform',
        'label_username' => __( 'Usu&aacute;rio' ),
        'label_password' => __( 'Senha' ),
        'label_log_in'   => __( 'Entrar' ),
        'id_submit'      => 'wp-submit',
        'remember'       => false,
        'value_username' => NULL,
	);
	wp_login_form();
}

