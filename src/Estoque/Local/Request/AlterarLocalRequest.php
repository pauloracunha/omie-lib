<?php

namespace OmieLib\Estoque\Local\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Local\LocaisEncontrados;
use OmieLib\Estoque\Local\LocalEstoqueJsonClient;
use OmieLib\Estoque\Local\Response\AlterarLocalResponse;
use OmieLib\Estoque\Local\Response\IncluirLocalResponse;
use OmieLib\Estoque\Local\Response\LocaisListarResponse;

/**
 * Requisição para alteração do Local de Estoque cadastrado.
 *
 * @pw_element integer $codigo_local_estoque Código do Local do Estoque.<BR><BR>Utilize esse ID para identificar os locais do estoque que serão utilizados nas demais APIs.
 * @pw_element string $codigo Código do Local do Estoque.<BR><BR>Conforme informado na tela de cadastro do Local do Estoque.<BR><BR>Para identificação do Local do Estoque via API utilize o campo "codigo_local_estoque".<BR>
 * @pw_element string $descricao Descrição do Local de Estoque.
 * @pw_element string $tipo Tipo de Local de Estoque.<BR><BR>Pode ser:<BR>1 - Estoque próprio da Empresa<BR>2 - Estoque próprio da Empresa em poder de terceiros<BR>3 - Estoque de terceiros em poder da Empresa&nbsp;<BR>
 * @pw_element string $consiSugeCompra Indica se o Local de Estoque deve ser considerado na sugestão de compra
 * @pw_element integer $codigo_cliente Código do cliente/fornecedor.
 * @pw_element string $dispOrdemProducao Indica se o Local do Estoque está disponível para Ordem de Produção (S/N).
 * @pw_element string $dispConsumoOP Indica se o Local do Estoque está disponível para consumo da Ordem de Produção (S/N).
 * @pw_element string $dispRemessa Indica se o Local do Estoque está disponível para Remessa (S/N).
 * @pw_element string $dispVenda Indica se o Local do Estoque está disponível para Venda (S/N).
 * @pw_complex alterarLocalRequest
 */
class AlterarLocalRequest{
	/**
	 * Código do Local do Estoque.<BR><BR>Utilize esse ID para identificar os locais do estoque que serão utilizados nas demais APIs.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Código do Local do Estoque.<BR><BR>Conforme informado na tela de cadastro do Local do Estoque.<BR><BR>Para identificação do Local do Estoque via API utilize o campo "codigo_local_estoque".<BR>
	 *
	 * @var string
	 */
	public string $codigo;
	/**
	 * Descrição do Local de Estoque.
	 *
	 * @var string
	 */
	public string $descricao;
	/**
	 * Tipo de Local de Estoque.<BR><BR>Pode ser:<BR>1 - Estoque próprio da Empresa<BR>2 - Estoque próprio da Empresa em poder de terceiros<BR>3 - Estoque de terceiros em poder da Empresa&nbsp;<BR>
	 *
	 * @var string
	 */
	public string $tipo;
	/**
	 * Indica se o Local de Estoque deve ser considerado na sugestão de compra
	 *
	 * @var string
	 */
	public string $consiSugeCompra;
	/**
	 * Código do cliente/fornecedor.
	 *
	 * @var integer
	 */
	public int $codigo_cliente;
	/**
	 * Indica se o Local do Estoque está disponível para Ordem de Produção (S/N).
	 *
	 * @var string
	 */
	public string $dispOrdemProducao;
	/**
	 * Indica se o Local do Estoque está disponível para consumo da Ordem de Produção (S/N).
	 *
	 * @var string
	 */
	public string $dispConsumoOP;
	/**
	 * Indica se o Local do Estoque está disponível para Remessa (S/N).
	 *
	 * @var string
	 */
	public string $dispRemessa;
	/**
	 * Indica se o Local do Estoque está disponível para Venda (S/N).
	 *
	 * @var string
	 */
	public string $dispVenda;
}
