<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * Mensagens de Erros
 *
 * @pw_element string $cCodigo Código da mensagem de erro/aviso
 * @pw_element string $cDescricao Descrição da mensagem de erro/aviso.
 * @pw_element string $cCorrecao Correção da descrição de mensagem de erro/aviso.
 * @pw_complex mensagens
 */
class Mensagens{
	/**
	 * Código da mensagem de erro/aviso
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição da mensagem de erro/aviso.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Correção da descrição de mensagem de erro/aviso.
	 *
	 * @var string
	 */
	public string $cCorrecao;
}
