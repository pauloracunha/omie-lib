<?php

namespace OmieLib\Produtos\Variacao\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Variacao\ACaracteristicas;
use OmieLib\Produtos\Variacao\AValoresCaracteristicas;
use OmieLib\Produtos\Variacao\AVariacoes;
use OmieLib\Produtos\Variacao\CaractVariacoes;
use OmieLib\Produtos\Variacao\Ident;
use OmieLib\Produtos\Variacao\ListaVariacoes;
use OmieLib\Produtos\Variacao\ProdutosVariacoesJsonClient;
use OmieLib\Produtos\Variacao\Request\VariacaoConsultarRequest;
use OmieLib\Produtos\Variacao\Request\VariacaoIncluirRequest;
use OmieLib\Produtos\Variacao\Request\VariacaoListarRequest;
use OmieLib\Produtos\Variacao\Variacoes;

/**
 * Resposta da solicitação da inclusão de variação para o produto.
 *
 * @pw_element string $cCodStatus Identificação do Produto.
 * @pw_element string $cDesStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_complex variacaoIncluirResponse
 */
class VariacaoIncluirResponse{
	/**
	 * Identificação do Produto.
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
