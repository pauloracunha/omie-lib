<?php

namespace OmieLib\Servicos\Servico;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Servico\Request\SrvAssociarRequest;
use OmieLib\Servicos\Servico\Request\SrvConsultarRequest;
use OmieLib\Servicos\Servico\Request\SrvEditarRequest;
use OmieLib\Servicos\Servico\Request\SrvExcluirRequest;
use OmieLib\Servicos\Servico\Request\SrvIncluirRequest;
use OmieLib\Servicos\Servico\Request\SrvListarRequest;
use OmieLib\Servicos\Servico\Request\SrvUpsertRequest;
use OmieLib\Servicos\Servico\Response\SrvAssociarResponse;
use OmieLib\Servicos\Servico\Response\SrvConsultarResponse;
use OmieLib\Servicos\Servico\Response\SrvEditarResponse;
use OmieLib\Servicos\Servico\Response\SrvExcluirResponse;
use OmieLib\Servicos\Servico\Response\SrvIncluirResponse;
use OmieLib\Servicos\Servico\Response\SrvListarResponse;
use OmieLib\Servicos\Servico\Response\SrvUpsertResponse;

/**
 * Produtos Utilizados no serviço.
 *
 * @pw_element string $cAtualizarProdutos Atualiza automaticamente. (S/N).<BR><BR>Atualiza as alterações dos produtos utilizados nas Ordens de Serviço e nos Contratos.
 * @pw_element produtoUtilizadoArray $produtoUtilizado rodutos utilizados no serviço.
 * @pw_complex produtosUtilizados
 */
class ProdutosUtilizados{
	/**
	 * Atualiza automaticamente. (S/N).<BR><BR>Atualiza as alterações dos produtos utilizados nas Ordens de Serviço e nos Contratos.
	 *
	 * @var string
	 */
	public string $cAtualizarProdutos;
	/**
	 * rodutos utilizados no serviço.
	 *
	 * @var ProdutoUtilizado[]
	 */
	public array $produtoUtilizado;
}
