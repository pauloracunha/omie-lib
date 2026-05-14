<?php

namespace OmieLib\Estoque\Local;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Local\Request\AlterarLocalRequest;
use OmieLib\Estoque\Local\Request\IncluirLocalRequest;
use OmieLib\Estoque\Local\Request\LocaisListarRequest;
use OmieLib\Estoque\Local\Response\AlterarLocalResponse;
use OmieLib\Estoque\Local\Response\IncluirLocalResponse;
use OmieLib\Estoque\Local\Response\LocaisListarResponse;

/**
 * Lista de Locais de Estoque encontrados.
 *
 * @pw_element integer $codigo_local_estoque Código do Local do Estoque.<BR><BR>Utilize esse ID para identificar os locais do estoque que serão utilizados nas demais APIs.
 * @pw_element string $codigo Código do Local do Estoque.<BR><BR>Conforme informado na tela de cadastro do Local do Estoque.<BR><BR>Para identificação do Local do Estoque via API utilize o campo "codigo_local_estoque".<BR>
 * @pw_element string $descricao Descrição do Local de Estoque.
 * @pw_element string $tipo Tipo de Local de Estoque.<BR><BR>Pode ser:<BR>1 - Estoque próprio da Empresa<BR>2 - Estoque próprio da Empresa em poder de terceiros<BR>3 - Estoque de terceiros em poder da Empresa&nbsp;<BR>
 * @pw_element string $padrao Indica se o Local do Estoque é padrão (S/N).
 * @pw_element string $inativo Indica se o Local do Estoque está inativo (S/N).
 * @pw_element integer $codigo_cliente Código do cliente/fornecedor.
 * @pw_element string $dispOrdemProducao Indica se o Local do Estoque está disponível para Ordem de Produção (S/N).
 * @pw_element string $dispConsumoOP Indica se o Local do Estoque está disponível para consumo da Ordem de Produção (S/N).
 * @pw_element string $dispRemessa Indica se o Local do Estoque está disponível para Remessa (S/N).
 * @pw_element string $dispVenda Indica se o Local do Estoque está disponível para Venda (S/N).
 * @pw_element string $dInc Data de Inclusão.
 * @pw_element string $hInc Hora de inclusão.
 * @pw_element string $uInc Código do usuário que realizou a inclusão.
 * @pw_element string $dAlt Hora de alteração.
 * @pw_element string $hAlt Hora de alteração.
 * @pw_element string $uAlt Código do usuário que realizou a alteração.
 * @pw_complex locaisEncontrados
 */
class LocaisEncontrados{
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
	 * Indica se o Local do Estoque é padrão (S/N).
	 *
	 * @var string
	 */
	public string $padrao;
	/**
	 * Indica se o Local do Estoque está inativo (S/N).
	 *
	 * @var string
	 */
	public string $inativo;
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
	/**
	 * Data de Inclusão.
	 *
	 * @var string
	 */
	public string $dInc;
	/**
	 * Hora de inclusão.
	 *
	 * @var string
	 */
	public string $hInc;
	/**
	 * Código do usuário que realizou a inclusão.
	 *
	 * @var string
	 */
	public string $uInc;
	/**
	 * Hora de alteração.
	 *
	 * @var string
	 */
	public string $dAlt;
	/**
	 * Hora de alteração.
	 *
	 * @var string
	 */
	public string $hAlt;
	/**
	 * Código do usuário que realizou a alteração.
	 *
	 * @var string
	 */
	public string $uAlt;
}
