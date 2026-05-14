<?php

namespace OmieLib\Crm\Contas\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contas\CRM_CONTAS_PESQUISA;
use OmieLib\Crm\Contas\CRM_CONTAS_RESPOSTA;
use OmieLib\Crm\Contas\Cadastros;
use OmieLib\Crm\Contas\Caracteristicas;
use OmieLib\Crm\Contas\ContasJsonClient;
use OmieLib\Crm\Contas\Contatos;
use OmieLib\Crm\Contas\Endereco;
use OmieLib\Crm\Contas\Identificacao;
use OmieLib\Crm\Contas\InformacoesAdicionais;
use OmieLib\Crm\Contas\Request\ContaListarRequest;
use OmieLib\Crm\Contas\Request\ContaVerificarRequest;
use OmieLib\Crm\Contas\Tags;
use OmieLib\Crm\Contas\Telefone_email;

/**
 * Resposta da verificação se uma conta existe a partir do nome e e-mail.
 *
 * @pw_element integer $nCod Código da Conta
 * @pw_element string $cCodInt Código de Integração
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDesStatus Descrição do Status
 * @pw_complex contaVerificarResponse
 */
class ContaVerificarResponse{
	/**
	 * Código da Conta
	 *
	 * @var integer
	 */
	public int $nCod;
	/**
	 * Código de Integração
	 *
	 * @var string
	 */
	public string $cCodInt;
	/**
	 * Código do Status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do Status
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
