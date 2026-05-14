<?php

namespace OmieLib\Servicos\Nfse;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nfse\Request\NfseListarRequest;
use OmieLib\Servicos\Nfse\Response\NfseListarResponse;

/**
 * Dados da Ordem de Serviço.
 *
 * @pw_element integer $nCodigoOS Código da Ordem de Serviço.
 * @pw_element string $nNumeroOS Número da Ordem de Serviço.
 * @pw_element decimal $nValorOS Valor da Ordem de Serviço.
 * @pw_element integer $nCodigoContrato Código do Contrato.
 * @pw_element string $cNumeroContrato Número do Contrato
 * @pw_element string $cPedidoCliente Número do Pedido do Cliente.
 * @pw_element DepartamentosArray $Departamentos Distribuição por Departamentos.
 * @pw_element CategoriasArray $Categorias Distribuição por Categorias.
 * @pw_complex OrdemServico
 */
class OrdemServico{
	/**
	 * Código da Ordem de Serviço.
	 *
	 * @var integer
	 */
	public int $nCodigoOS;
	/**
	 * Número da Ordem de Serviço.
	 *
	 * @var string
	 */
	public string $nNumeroOS;
	/**
	 * Valor da Ordem de Serviço.
	 *
	 * @var decimal
	 */
	public float $nValorOS;
	/**
	 * Código do Contrato.
	 *
	 * @var integer
	 */
	public int $nCodigoContrato;
	/**
	 * Número do Contrato
	 *
	 * @var string
	 */
	public string $cNumeroContrato;
	/**
	 * Número do Pedido do Cliente.
	 *
	 * @var string
	 */
	public string $cPedidoCliente;
	/**
	 * Distribuição por Departamentos.
	 *
	 * @var Departamentos[]
	 */
	public array $Departamentos;
	/**
	 * Distribuição por Categorias.
	 *
	 * @var Categorias[]
	 */
	public array $Categorias;
}
