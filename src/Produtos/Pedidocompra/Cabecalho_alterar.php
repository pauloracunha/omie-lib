<?php

namespace OmieLib\Produtos\Pedidocompra;

use OmieLib\Common\OmieFail;

/**
 * Cabeçalho do Pedido de Compra
 *
 * @pw_element integer $nCodPed Código interno do pedido de compra (este é o código do pedido no Omie)
 * @pw_element string $cCodIntPed Código de integração do pedido de compra (este é o código do pedido no seu sistema)
 * @pw_element string $dDtPrevisao Data de previsão de entrega do pedido de compra
 * @pw_element string $cCodParc Código da Condição de Pagamento/Parcelamento.<BR><BR>"999" - Padrão.
 * @pw_element integer $nQtdeParc Quantidade de parcelas do pedido
 * @pw_element string $cCnpjCpfFor CNPJ / CPF<BR><BR>Preenchimento opcional. <BR>Quando informada as tags nCodFor e cCodIntFor não devem ser informadas.
 * @pw_element integer $nCodFor Código interno do fornecedor do pedido (este é o código do fornecedor no Omie)
 * @pw_element string $cCodIntFor Código de integração do fornecedor do pedido (este é o código do fornecedor no seu sistema)
 * @pw_element string $cCodCateg Código da categoria de compra do item
 * @pw_element integer $nCodCompr Código do comprador do pedido
 * @pw_element string $cContato Nome do contato no fornecedor responsável pelo pedido de compra
 * @pw_element string $cContrato Número do Contrato de Compra
 * @pw_element integer $nCodCC Código interno da conta corrente do pedido de compra (este é o código da conta corrente no Omie)
 * @pw_element string $nCodIntCC Código de integração da conta corrente do pedido (este é o código da conta corrente no seu sistema)
 * @pw_element integer $nCodProj Código do projeto relacionado ao pedido de compra
 * @pw_element string $cNumPedido Número do pedido para o fornecedor
 * @pw_element string $cObs Observações do pedido de compra (elas não serão impressas no pedido enviado ao fornecedor)
 * @pw_element string $cObsInt Observações internas do pedido (elas serão exibidas apenas para quem consultar o pedido de compra)
 * @pw_complex cabecalho_alterar
 */
class Cabecalho_alterar{
	/**
	 * Código interno do pedido de compra (este é o código do pedido no Omie)
	 *
	 * @var integer
	 */
	public int $nCodPed;
	/**
	 * Código de integração do pedido de compra (este é o código do pedido no seu sistema)
	 *
	 * @var string
	 */
	public string $cCodIntPed;
	/**
	 * Data de previsão de entrega do pedido de compra
	 *
	 * @var string
	 */
	public string $dDtPrevisao;
	/**
	 * Código da Condição de Pagamento/Parcelamento.<BR><BR>"999" - Padrão.
	 *
	 * @var string
	 */
	public string $cCodParc;
	/**
	 * Quantidade de parcelas do pedido
	 *
	 * @var integer
	 */
	public int $nQtdeParc;
	/**
	 * CNPJ / CPF<BR><BR>Preenchimento opcional. <BR>Quando informada as tags nCodFor e cCodIntFor não devem ser informadas.
	 *
	 * @var string
	 */
	public string $cCnpjCpfFor;
	/**
	 * Código interno do fornecedor do pedido (este é o código do fornecedor no Omie)
	 *
	 * @var integer
	 */
	public int $nCodFor;
	/**
	 * Código de integração do fornecedor do pedido (este é o código do fornecedor no seu sistema)
	 *
	 * @var string
	 */
	public string $cCodIntFor;
	/**
	 * Código da categoria de compra do item
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Código do comprador do pedido
	 *
	 * @var integer
	 */
	public int $nCodCompr;
	/**
	 * Nome do contato no fornecedor responsável pelo pedido de compra
	 *
	 * @var string
	 */
	public string $cContato;
	/**
	 * Número do Contrato de Compra
	 *
	 * @var string
	 */
	public string $cContrato;
	/**
	 * Código interno da conta corrente do pedido de compra (este é o código da conta corrente no Omie)
	 *
	 * @var integer
	 */
	public int $nCodCC;
	/**
	 * Código de integração da conta corrente do pedido (este é o código da conta corrente no seu sistema)
	 *
	 * @var string
	 */
	public string $nCodIntCC;
	/**
	 * Código do projeto relacionado ao pedido de compra
	 *
	 * @var integer
	 */
	public int $nCodProj;
	/**
	 * Número do pedido para o fornecedor
	 *
	 * @var string
	 */
	public string $cNumPedido;
	/**
	 * Observações do pedido de compra (elas não serão impressas no pedido enviado ao fornecedor)
	 *
	 * @var string
	 */
	public string $cObs;
	/**
	 * Observações internas do pedido (elas serão exibidas apenas para quem consultar o pedido de compra)
	 *
	 * @var string
	 */
	public string $cObsInt;
}
