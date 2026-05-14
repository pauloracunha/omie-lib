<?php

namespace OmieLib\Produtos\Variacao;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Variacao\Request\VariacaoConsultarRequest;
use OmieLib\Produtos\Variacao\Request\VariacaoIncluirRequest;
use OmieLib\Produtos\Variacao\Request\VariacaoListarRequest;
use OmieLib\Produtos\Variacao\Response\VariacaoConsultarResponse;
use OmieLib\Produtos\Variacao\Response\VariacaoIncluirResponse;
use OmieLib\Produtos\Variacao\Response\VariacaoListarResponse;

/**
 * Características das variações.
 *
 * @pw_element integer $nIdCaract Id da Característica.
 * @pw_element string $cNomeCaract Nome da característica variante.
 * @pw_element integer $cConteudoCaract Conteúdo da característica.
 * @pw_complex CaractVariacoes
 */
class CaractVariacoes{
	/**
	 * Id da Característica.
	 *
	 * @var integer
	 */
	public int $nIdCaract;
	/**
	 * Nome da característica variante.
	 *
	 * @var string
	 */
	public string $cNomeCaract;
	/**
	 * Conteúdo da característica.
	 *
	 * @var integer
	 */
	public int $cConteudoCaract;
}
