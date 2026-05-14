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
 * @pw_element string $cCodCateg Código da Categoria
 * @pw_element string $cContato Contato
 * @pw_element integer $nCodProj Código do Projeto
 * @pw_element string $cPedido Número do Pedido do cliente
 * @pw_element string $cNumCtr Número do Contrato de Venda
 * @pw_element string $cDadosAdic Dados Adicionais para a Nota Fiscal
 * @pw_element string $cConsFinal Nota Fiscal para Consumidor Final (S/N)
 * @pw_element outros_detalhes $outros_detalhes Outros detalhes da NF-e.<BR><BR>Preenchimento Opcional.
 * @pw_element nfRelacionada $nfRelacionada Detalhes da NF referenciada.
 * @pw_complex infAdic
 */
class InfAdic{
	/**
	 * Código da Categoria
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Contato
	 *
	 * @var string
	 */
	public string $cContato;
	/**
	 * Código do Projeto
	 *
	 * @var integer
	 */
	public int $nCodProj;
	/**
	 * Número do Pedido do cliente
	 *
	 * @var string
	 */
	public string $cPedido;
	/**
	 * Número do Contrato de Venda
	 *
	 * @var string
	 */
	public string $cNumCtr;
	/**
	 * Dados Adicionais para a Nota Fiscal
	 *
	 * @var string
	 */
	public string $cDadosAdic;
	/**
	 * Nota Fiscal para Consumidor Final (S/N)
	 *
	 * @var string
	 */
	public string $cConsFinal;
	/**
	 * Outros detalhes da NF-e.<BR><BR>Preenchimento Opcional.
	 *
	 * @var Outros_detalhes
	 */
	public Outros_detalhes $outros_detalhes;
	/**
	 * Detalhes da NF referenciada.
	 *
	 * @var NfRelacionada
	 */
	public NfRelacionada $nfRelacionada;
}
