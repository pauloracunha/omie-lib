<?php

namespace OmieLib\Produtos\Requisicaocompra;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Requisicaocompra\Request\RcListarRequest;
use OmieLib\Produtos\Requisicaocompra\Response\RcListarResponse;

/**
 * Cadastro de Requisição de Compras
 *
 * @pw_element integer $codReqCompra Código da Requisição de Compras
 * @pw_element string $codIntReqCompra Código de integração da requisição de Compra.
 * @pw_element string $codCateg Código da Categoria
 * @pw_element integer $codProj Código do Projeto
 * @pw_element string $dtSugestao Data de Sugestão de Entrega
 * @pw_element string $obsReqCompra Preencha aqui as observações desta requisição (elas serão impressas na carta de cotação para o fornecedor)
 * @pw_element string $obsIntReqCompra Preencha aqui as observações internas desta requisição (elas serão exibidas apenas aqui)
 * @pw_element ItensReqCompraArray $ItensReqCompra Itens da Requisição de Compras
 * @pw_complex requisicaoCadastro
 */
class RequisicaoCadastro{
	/**
	 * Código da Requisição de Compras
	 *
	 * @var integer
	 */
	public int $codReqCompra;
	/**
	 * Código de integração da requisição de Compra.
	 *
	 * @var string
	 */
	public string $codIntReqCompra;
	/**
	 * Código da Categoria
	 *
	 * @var string
	 */
	public string $codCateg;
	/**
	 * Código do Projeto
	 *
	 * @var integer
	 */
	public int $codProj;
	/**
	 * Data de Sugestão de Entrega
	 *
	 * @var string
	 */
	public string $dtSugestao;
	/**
	 * Preencha aqui as observações desta requisição (elas serão impressas na carta de cotação para o fornecedor)
	 *
	 * @var string
	 */
	public string $obsReqCompra;
	/**
	 * Preencha aqui as observações internas desta requisição (elas serão exibidas apenas aqui)
	 *
	 * @var string
	 */
	public string $obsIntReqCompra;
	/**
	 * Itens da Requisição de Compras
	 *
	 * @var ItensReqCompra[]
	 */
	public array $ItensReqCompra;
}
