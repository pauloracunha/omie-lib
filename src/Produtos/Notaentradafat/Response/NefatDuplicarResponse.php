<?php

namespace OmieLib\Produtos\Notaentradafat\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentradafat\NotaEntradaFaturamentoJsonClient;
use OmieLib\Produtos\Notaentradafat\Request\NefatCancelarRequest;
use OmieLib\Produtos\Notaentradafat\Request\NefatConcluirRequest;
use OmieLib\Produtos\Notaentradafat\Request\NefatConferirRequest;
use OmieLib\Produtos\Notaentradafat\Request\NefatDuplicarRequest;

/**
 * Resposta da duplicação da nota de entrada
 *
 * @pw_element integer $nCodNotaEnt ID da nota de entrada.<BR><BR>Preenchimento automático na inclusão - Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela. <BR>É uma informação interna, utilizada apenas nas APIs.
 * @pw_element string $cCodIntNotaEnt Código de integração da nota de entrada.<BR><BR>Preenchimento Obrigatório na inclusão/alteração.<BR>Preenchimento Opcional na Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código da nota de entrada no aplicativo que você está integrando com o Omie. A função dele é servir como uma mapa de relacionamento entre as aplicações. Ao realizar uma consulta/listagem de notas de entrada você conseguirá ver a relação entre o id da nota de entrada gerado no Omie e o código de nota de entrada existente em sua aplicação.
 * @pw_element string $cCodStatus Código do status
 * @pw_element string $cDescStatus Descrição do status
 * @pw_complex nefatDuplicarResponse
 */
class NefatDuplicarResponse{
	/**
	 * ID da nota de entrada.<BR><BR>Preenchimento automático na inclusão - Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela. <BR>É uma informação interna, utilizada apenas nas APIs.
	 *
	 * @var integer
	 */
	public int $nCodNotaEnt;
	/**
	 * Código de integração da nota de entrada.<BR><BR>Preenchimento Obrigatório na inclusão/alteração.<BR>Preenchimento Opcional na Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código da nota de entrada no aplicativo que você está integrando com o Omie. A função dele é servir como uma mapa de relacionamento entre as aplicações. Ao realizar uma consulta/listagem de notas de entrada você conseguirá ver a relação entre o id da nota de entrada gerado no Omie e o código de nota de entrada existente em sua aplicação.
	 *
	 * @var string
	 */
	public string $cCodIntNotaEnt;
	/**
	 * Código do status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status
	 *
	 * @var string
	 */
	public string $cDescStatus;
}
