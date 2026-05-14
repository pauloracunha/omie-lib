<?php

namespace OmieLib\Geral\Malha;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Malha\Request\MalhaAlterarRequest;
use OmieLib\Geral\Malha\Request\MalhaConsultarRequest;
use OmieLib\Geral\Malha\Request\MalhaExcluirRequest;
use OmieLib\Geral\Malha\Request\MalhaIncluirRequest;
use OmieLib\Geral\Malha\Request\MalhaPesquisarRequest;
use OmieLib\Geral\Malha\Response\MalhaAlterarResponse;
use OmieLib\Geral\Malha\Response\MalhaConsultarResponse;
use OmieLib\Geral\Malha\Response\MalhaExcluirResponse;
use OmieLib\Geral\Malha\Response\MalhaIncluirResponse;
use OmieLib\Geral\Malha\Response\MalhaPesquisarResponse;

/**
 * Resultado da pesquisa de estrutura de produtos.
 *
 * @pw_element ident $ident Identificação do produto.
 * @pw_element observacoes $observacoes Observações.
 * @pw_element custoProducao $custoProducao Custo de Produção.
 * @pw_element itensArray $itens Itens da estrutura de produto.
 * @pw_complex produtosEncontrados
 */
class ProdutosEncontrados{
	/**
	 * Identificação do produto.
	 *
	 * @var Ident
	 */
	public Ident $ident;
	/**
	 * Observações.
	 *
	 * @var Observacoes
	 */
	public Observacoes $observacoes;
	/**
	 * Custo de Produção.
	 *
	 * @var CustoProducao
	 */
	public CustoProducao $custoProducao;
	/**
	 * Itens da estrutura de produto.
	 *
	 * @var Itens[]
	 */
	public array $itens;
}
