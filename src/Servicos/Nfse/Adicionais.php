<?php

namespace OmieLib\Servicos\Nfse;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nfse\Request\NfseListarRequest;
use OmieLib\Servicos\Nfse\Response\NfseListarResponse;

/**
 * Informações adicionais.
 *
 * @pw_element string $cCodigoCategoria Código da Categoria.
 * @pw_element integer $nCodigoCC Código da Conta Corrente.
 * @pw_element integer $nCodigoProjeto Código do Projeto.
 * @pw_element integer $nCodigoVendedor Código do Vendedor.
 * @pw_complex Adicionais
 */
class Adicionais{
	/**
	 * Código da Categoria.
	 *
	 * @var string
	 */
	public string $cCodigoCategoria;
	/**
	 * Código da Conta Corrente.
	 *
	 * @var integer
	 */
	public int $nCodigoCC;
	/**
	 * Código do Projeto.
	 *
	 * @var integer
	 */
	public int $nCodigoProjeto;
	/**
	 * Código do Vendedor.
	 *
	 * @var integer
	 */
	public int $nCodigoVendedor;
}
