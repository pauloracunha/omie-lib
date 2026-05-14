<?php

namespace OmieLib\Geral\Caracteristicas;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Caracteristicas\Request\CaractAlterarRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractConsultarRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractExcluirRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractIncluirRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractListarRequest;
use OmieLib\Geral\Caracteristicas\Response\CaractAlterarResponse;
use OmieLib\Geral\Caracteristicas\Response\CaractConsultarResponse;
use OmieLib\Geral\Caracteristicas\Response\CaractExcluirResponse;
use OmieLib\Geral\Caracteristicas\Response\CaractIncluirResponse;
use OmieLib\Geral\Caracteristicas\Response\CaractListarResponse;

/**
 * Lista com os possíveis conteúdos para uma característica.
 *
 * @pw_element string $cConteudo Descrição do conteúdo da característica.
 * @pw_element integer $nIdConteudo Id do do Conteúdo/valor da característica.
 * @pw_complex conteudosPermitidos
 */
class ConteudosPermitidos{
	/**
	 * Descrição do conteúdo da característica.
	 *
	 * @var string
	 */
	public string $cConteudo;
	/**
	 * Id do do Conteúdo/valor da característica.
	 *
	 * @var integer
	 */
	public int $nIdConteudo;
}
