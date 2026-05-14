<?php

namespace OmieLib\Crm\Contas\Request;

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
use OmieLib\Crm\Contas\Response\ContaListarResponse;
use OmieLib\Crm\Contas\Response\ContaVerificarResponse;
use OmieLib\Crm\Contas\Tags;
use OmieLib\Crm\Contas\Telefone_email;

/**
 * Verifica se uma conta existe a partir do nome e e-mail.
 *
 * @pw_element string $cNome Nome da Conta
 * @pw_element string $cEmail E-Mail
 * @pw_element string $cDoc Número do Documento: CNPJ ou CPF.
 * @pw_complex contaVerificarRequest
 */
class ContaVerificarRequest{
	/**
	 * Nome da Conta
	 *
	 * @var string
	 */
	public string $cNome;
	/**
	 * E-Mail
	 *
	 * @var string
	 */
	public string $cEmail;
	/**
	 * Número do Documento: CNPJ ou CPF.
	 *
	 * @var string
	 */
	public string $cDoc;
}
