<?php

namespace OmieLib\Produtos\Cupomfiscalconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcItensRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcListarRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcPagamentosRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcItensResponse;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcListarResponse;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcPagamentosResponse;

/**
 * Dados dos Itens do Cupom Fiscal.
 *
 * @pw_element integer $nIdCupom ID do Cupom Fiscal.
 * @pw_element string $cModeloCupom Modelo de Cupom Fiscal.<BR>Pode ser:<BR>00 - ECF<BR>59 - CFe-SAT<BR>65 - NFC-e
 * @pw_element integer $seqCaixa Número sequencial do Caixa.
 * @pw_element integer $seqCupom Numero sequencial do cupom.
 * @pw_element integer $nNumCupom Número do Cupom Fiscal.
 * @pw_element decimal $nValorCupom Valor do Cupom Fiscal.
 * @pw_element string $dDtEmissaoCupom Data de emissão do Cupom Fiscal.
 * @pw_element string $cHrEmisaoCupom Hora de emissão de Cupom Fiscal.
 * @pw_element string $cChaveCupom Chave do Cupom Fiscal.
 * @pw_element string $nSerieCupom Série do Cupom Fiscal
 * @pw_element string $cCupomCancelado Cupom Fiscal Cancelado (S/N)?
 * @pw_element string $cCupomDevolvido Cupom Fiscal Devolvido (S/N)?
 * @pw_element integer $seqItem Sequência do Item do Cupom Fiscal.
 * @pw_element string $dDtInclusao Data de Inclusão do Documento.
 * @pw_element string $dDtAlteracao Data de Alteração do Documento.
 * @pw_element integer $idCliente Código do cliente.
 * @pw_element string $cCpfCnpjCliente CPF/CNPJ do Cliente.
 * @pw_element string $cRazaoSocialCliente Razão Social do Cliente.
 * @pw_element string $cItemCancelado Item do Cupom Fiscal Cancelado (S/N)?
 * @pw_element string $cItemDevolvido Item do Cupom Fiscal Devolvido (S/N)?
 * @pw_element integer $idItem ID do item do cupom fiscal
 * @pw_element integer $idProduto ID do produto do item do cupom fiscal
 * @pw_element integer $idMovEstoque Id da movimentação de estoque do item do cupom
 * @pw_element integer $idAjusteEstoque Id da movimentação de ajuste do estoque do item do cupom fiscal
 * @pw_element integer $idLocalEstoque Id do local de estoque do item do cupom fiscal
 * @pw_element integer $idAjusteCanc Id da movimentação de cancelamento de ajuste do estoque do item do cupom fiscal
 * @pw_element integer $idMovCanc ID do Movimento de Estoque do cancelamento do item do cupom fiscal
 * @pw_element string $cNaoMovEstoque Indica se o item do cupom fiscal não movimenta estoque
 * @pw_element decimal $nQuant Quantidade do item do cupom fiscal
 * @pw_element decimal $vUnit Valor unitário do item do cupom fiscal
 * @pw_element decimal $vDesc Valor desconto do item do cupom fiscal
 * @pw_element decimal $vAcresc Valor acréscimo do item do cupom fiscal
 * @pw_element decimal $vItem Valor líquido do item do cupom fiscal
 * @pw_element decimal $nQuantDev Quantidade devolvida do item do cupom fiscal
 * @pw_element string $emiProduto Código do PDV do item do cupom fiscal
 * @pw_element string $xProd Descrição do item do cupom fiscal
 * @pw_element string $cUn Unidade do item do cupom fiscal
 * @pw_complex itens
 */
class Itens{
	/**
	 * ID do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nIdCupom;
	/**
	 * Modelo de Cupom Fiscal.<BR>Pode ser:<BR>00 - ECF<BR>59 - CFe-SAT<BR>65 - NFC-e
	 *
	 * @var string
	 */
	public string $cModeloCupom;
	/**
	 * Número sequencial do Caixa.
	 *
	 * @var integer
	 */
	public int $seqCaixa;
	/**
	 * Numero sequencial do cupom.
	 *
	 * @var integer
	 */
	public int $seqCupom;
	/**
	 * Número do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nNumCupom;
	/**
	 * Valor do Cupom Fiscal.
	 *
	 * @var decimal
	 */
	public float $nValorCupom;
	/**
	 * Data de emissão do Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $dDtEmissaoCupom;
	/**
	 * Hora de emissão de Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $cHrEmisaoCupom;
	/**
	 * Chave do Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $cChaveCupom;
	/**
	 * Série do Cupom Fiscal
	 *
	 * @var string
	 */
	public string $nSerieCupom;
	/**
	 * Cupom Fiscal Cancelado (S/N)?
	 *
	 * @var string
	 */
	public string $cCupomCancelado;
	/**
	 * Cupom Fiscal Devolvido (S/N)?
	 *
	 * @var string
	 */
	public string $cCupomDevolvido;
	/**
	 * Sequência do Item do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $seqItem;
	/**
	 * Data de Inclusão do Documento.
	 *
	 * @var string
	 */
	public string $dDtInclusao;
	/**
	 * Data de Alteração do Documento.
	 *
	 * @var string
	 */
	public string $dDtAlteracao;
	/**
	 * Código do cliente.
	 *
	 * @var integer
	 */
	public int $idCliente;
	/**
	 * CPF/CNPJ do Cliente.
	 *
	 * @var string
	 */
	public string $cCpfCnpjCliente;
	/**
	 * Razão Social do Cliente.
	 *
	 * @var string
	 */
	public string $cRazaoSocialCliente;
	/**
	 * Item do Cupom Fiscal Cancelado (S/N)?
	 *
	 * @var string
	 */
	public string $cItemCancelado;
	/**
	 * Item do Cupom Fiscal Devolvido (S/N)?
	 *
	 * @var string
	 */
	public string $cItemDevolvido;
	/**
	 * ID do item do cupom fiscal
	 *
	 * @var integer
	 */
	public int $idItem;
	/**
	 * ID do produto do item do cupom fiscal
	 *
	 * @var integer
	 */
	public int $idProduto;
	/**
	 * Id da movimentação de estoque do item do cupom
	 *
	 * @var integer
	 */
	public int $idMovEstoque;
	/**
	 * Id da movimentação de ajuste do estoque do item do cupom fiscal
	 *
	 * @var integer
	 */
	public int $idAjusteEstoque;
	/**
	 * Id do local de estoque do item do cupom fiscal
	 *
	 * @var integer
	 */
	public int $idLocalEstoque;
	/**
	 * Id da movimentação de cancelamento de ajuste do estoque do item do cupom fiscal
	 *
	 * @var integer
	 */
	public int $idAjusteCanc;
	/**
	 * ID do Movimento de Estoque do cancelamento do item do cupom fiscal
	 *
	 * @var integer
	 */
	public int $idMovCanc;
	/**
	 * Indica se o item do cupom fiscal não movimenta estoque
	 *
	 * @var string
	 */
	public string $cNaoMovEstoque;
	/**
	 * Quantidade do item do cupom fiscal
	 *
	 * @var decimal
	 */
	public float $nQuant;
	/**
	 * Valor unitário do item do cupom fiscal
	 *
	 * @var decimal
	 */
	public float $vUnit;
	/**
	 * Valor desconto do item do cupom fiscal
	 *
	 * @var decimal
	 */
	public float $vDesc;
	/**
	 * Valor acréscimo do item do cupom fiscal
	 *
	 * @var decimal
	 */
	public float $vAcresc;
	/**
	 * Valor líquido do item do cupom fiscal
	 *
	 * @var decimal
	 */
	public float $vItem;
	/**
	 * Quantidade devolvida do item do cupom fiscal
	 *
	 * @var decimal
	 */
	public float $nQuantDev;
	/**
	 * Código do PDV do item do cupom fiscal
	 *
	 * @var string
	 */
	public string $emiProduto;
	/**
	 * Descrição do item do cupom fiscal
	 *
	 * @var string
	 */
	public string $xProd;
	/**
	 * Unidade do item do cupom fiscal
	 *
	 * @var string
	 */
	public string $cUn;
}
