<?php

namespace OmieLib\Crm\Contas;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contas\Request\ContaListarRequest;
use OmieLib\Crm\Contas\Request\ContaVerificarRequest;
use OmieLib\Crm\Contas\Response\ContaListarResponse;
use OmieLib\Crm\Contas\Response\ContaVerificarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element identificacao $identificacao Identificação da conta
 * @pw_element endereco $endereco Endereço da conta
 * @pw_element telefone_email $telefone_email Informações de contato com a conta
 * @pw_element informacoesAdicionais $informacoesAdicionais Informações adicionais da conta
 * @pw_element tagsArray $tags Tags da conta<BR><BR>Preenchimento opcional
 * @pw_element caracteristicasArray $caracteristicas Caracteristicas da conta<BR><BR>Preenchimento opcional<BR><BR>
 * @pw_element contatosArray $contatos Contatos da Conta
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Identificação da conta
	 *
	 * @var Identificacao
	 */
	public Identificacao $identificacao;
	/**
	 * Endereço da conta
	 *
	 * @var Endereco
	 */
	public Endereco $endereco;
	/**
	 * Informações de contato com a conta
	 *
	 * @var Telefone_email
	 */
	public Telefone_email $telefone_email;
	/**
	 * Informações adicionais da conta
	 *
	 * @var InformacoesAdicionais
	 */
	public InformacoesAdicionais $informacoesAdicionais;
	/**
	 * Tags da conta<BR><BR>Preenchimento opcional
	 *
	 * @var Tags[]
	 */
	public array $tags;
	/**
	 * Caracteristicas da conta<BR><BR>Preenchimento opcional<BR><BR>
	 *
	 * @var Caracteristicas[]
	 */
	public array $caracteristicas;
	/**
	 * Contatos da Conta
	 *
	 * @var Contatos[]
	 */
	public array $contatos;
}
