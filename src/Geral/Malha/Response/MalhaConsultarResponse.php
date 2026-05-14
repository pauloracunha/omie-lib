<?php

namespace OmieLib\Geral\Malha\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Malha\CustoProducao;
use OmieLib\Geral\Malha\Ident;
use OmieLib\Geral\Malha\ItemMalhaAlterar;
use OmieLib\Geral\Malha\ItemMalhaIncluir;
use OmieLib\Geral\Malha\ItemMalhaStatus;
use OmieLib\Geral\Malha\Itens;
use OmieLib\Geral\Malha\Observacoes;
use OmieLib\Geral\Malha\ProdutosEncontrados;
use OmieLib\Geral\Malha\ProdutosEstruturaJsonClient;
use OmieLib\Geral\Malha\Request\MalhaAlterarRequest;
use OmieLib\Geral\Malha\Request\MalhaConsultarRequest;
use OmieLib\Geral\Malha\Request\MalhaExcluirRequest;
use OmieLib\Geral\Malha\Request\MalhaIncluirRequest;
use OmieLib\Geral\Malha\Request\MalhaPesquisarRequest;

/**
 * Resposta da solicitação de consulta da malha/estrutura de um produto.
 *
 * @pw_element ident $ident Identificação do produto.
 * @pw_element observacoes $observacoes Observações.
 * @pw_element custoProducao $custoProducao Custo de Produção.
 * @pw_element itensArray $itens Itens da estrutura de produto.
 * @pw_complex malhaConsultarResponse
 */
class MalhaConsultarResponse{
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
