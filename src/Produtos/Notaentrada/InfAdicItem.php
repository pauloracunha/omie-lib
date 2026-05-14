<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Informações adicionais do item
 *
 * @pw_element decimal $nPesoLiq Peso líquido (Kg).<BR><BR>Preenchimento opcional.
 * @pw_element decimal $nPesoBruto Peso bruto (Kg).<BR><BR>Preenchimento opcional.
 * @pw_element string $cPedCompra Número do pedido de compra.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nItemPedCompra Item do pedido de compra.<BR><BR>Preenchimento opcional.
 * @pw_element string $cInfItemNF Informações para a nota fiscal.<BR><BR>Preenchimento opcional.<BR>
 * @pw_element string $cNaoMovEstoque Não gerar a saída de estoque deste item ao emitir NF-e.<BR>Preenchimento opcional.<BR><BR>Informar "S" ou "N".<BR>(informe "S" para ativar essa opção).
 * @pw_element string $cCodBenef Código de Beneficiário Fiscal na UF aplicado ao item
 * @pw_element string $numero_recopi Número do registro gerado pelo sistema RECOPI Nacional (Reconhecimento e Controle das Operações com Papel Imune).
 * @pw_complex infAdicItem
 */
class InfAdicItem{
	/**
	 * Peso líquido (Kg).<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $nPesoLiq;
	/**
	 * Peso bruto (Kg).<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $nPesoBruto;
	/**
	 * Número do pedido de compra.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cPedCompra;
	/**
	 * Item do pedido de compra.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nItemPedCompra;
	/**
	 * Informações para a nota fiscal.<BR><BR>Preenchimento opcional.<BR>
	 *
	 * @var string
	 */
	public string $cInfItemNF;
	/**
	 * Não gerar a saída de estoque deste item ao emitir NF-e.<BR>Preenchimento opcional.<BR><BR>Informar "S" ou "N".<BR>(informe "S" para ativar essa opção).
	 *
	 * @var string
	 */
	public string $cNaoMovEstoque;
	/**
	 * Código de Beneficiário Fiscal na UF aplicado ao item
	 *
	 * @var string
	 */
	public string $cCodBenef;
	/**
	 * Número do registro gerado pelo sistema RECOPI Nacional (Reconhecimento e Controle das Operações com Papel Imune).
	 *
	 * @var string
	 */
	public string $numero_recopi;
}
