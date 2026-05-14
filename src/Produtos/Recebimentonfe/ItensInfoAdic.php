<?php

namespace OmieLib\Produtos\Recebimentonfe;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarEtapaRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConsultarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoExcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoListarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoReverterRequest;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarEtapaResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConsultarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoExcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoListarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoReverterResponse;

/**
 * Informações adicionais do item da NFe de recebimento
 *
 * @pw_element decimal $nPesoLiquidoIt Peso Líquido (Kg)
 * @pw_element decimal $nPesoBrutoIt Peso Bruto (Kg)
 * @pw_element string $cCategoriaItem Categoria do item
 * @pw_element string $nNumPedCompra Número do Pedido de Compra
 * @pw_element integer $cNumItPedCompra Item do Pedido de Compra
 * @pw_element string $cNumFCI Número da FCI - informação relacionada com a Resolução 13/2012 do Senado Federal
 * @pw_element decimal $vAproxTributosIt Valor Aprox. dos Tributos
 * @pw_element integer $codigo_local_estoque_saida Id do local de estoque de saída
 * @pw_complex itensInfoAdic
 */
class ItensInfoAdic{
	/**
	 * Peso Líquido (Kg)
	 *
	 * @var decimal
	 */
	public float $nPesoLiquidoIt;
	/**
	 * Peso Bruto (Kg)
	 *
	 * @var decimal
	 */
	public float $nPesoBrutoIt;
	/**
	 * Categoria do item
	 *
	 * @var string
	 */
	public string $cCategoriaItem;
	/**
	 * Número do Pedido de Compra
	 *
	 * @var string
	 */
	public string $nNumPedCompra;
	/**
	 * Item do Pedido de Compra
	 *
	 * @var integer
	 */
	public int $cNumItPedCompra;
	/**
	 * Número da FCI - informação relacionada com a Resolução 13/2012 do Senado Federal
	 *
	 * @var string
	 */
	public string $cNumFCI;
	/**
	 * Valor Aprox. dos Tributos
	 *
	 * @var decimal
	 */
	public float $vAproxTributosIt;
	/**
	 * Id do local de estoque de saída
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque_saida;
}
