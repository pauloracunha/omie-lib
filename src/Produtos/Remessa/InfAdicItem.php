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
 * Informações Adicionais da Remessa
 *
 * @pw_element decimal $nPesoLiq Peso Líquido (Kg)
 * @pw_element decimal $nPesoBruto Peso Bruto (Kg)
 * @pw_element decimal $nAliqIBPT Alíquota IBPT
 * @pw_element string $cPedCompra Número do Pedido de Compra
 * @pw_element integer $nItemPedCompra Item do Pedido de Compra
 * @pw_element string $cInfItemNF Informações para a Nota Fiscal
 * @pw_element string $cNaoMovEstoque Não gerar a saída de estoque deste item ao emitir a NF-e (S/N)
 * @pw_element integer $codigo_cenario_impostos_item Código do cenário fiscal de impostos.
 * @pw_element integer $codigo_local_estoque_entrada Código do Local do Estoque de Entrada.
 * @pw_element string $numero_recopi Número do registro gerado pelo sistema RECOPI Nacional (Reconhecimento e Controle das Operações com Papel Imune).
 * @pw_complex infAdicItem
 */
class InfAdicItem{
	/**
	 * Peso Líquido (Kg)
	 *
	 * @var decimal
	 */
	public float $nPesoLiq;
	/**
	 * Peso Bruto (Kg)
	 *
	 * @var decimal
	 */
	public float $nPesoBruto;
	/**
	 * Alíquota IBPT
	 *
	 * @var decimal
	 */
	public float $nAliqIBPT;
	/**
	 * Número do Pedido de Compra
	 *
	 * @var string
	 */
	public string $cPedCompra;
	/**
	 * Item do Pedido de Compra
	 *
	 * @var integer
	 */
	public int $nItemPedCompra;
	/**
	 * Informações para a Nota Fiscal
	 *
	 * @var string
	 */
	public string $cInfItemNF;
	/**
	 * Não gerar a saída de estoque deste item ao emitir a NF-e (S/N)
	 *
	 * @var string
	 */
	public string $cNaoMovEstoque;
	/**
	 * Código do cenário fiscal de impostos.
	 *
	 * @var integer
	 */
	public int $codigo_cenario_impostos_item;
	/**
	 * Código do Local do Estoque de Entrada.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque_entrada;
	/**
	 * Número do registro gerado pelo sistema RECOPI Nacional (Reconhecimento e Controle das Operações com Papel Imune).
	 *
	 * @var string
	 */
	public string $numero_recopi;
}
