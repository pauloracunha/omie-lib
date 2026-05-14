<?php

namespace OmieLib\Crm\Contascaract;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contascaract\Request\AlterarCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Request\ConsultarCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Request\ExcluirCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Request\ExcluirTodasCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Request\IncluirCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Response\AlterarCaractCRMContaResponse;
use OmieLib\Crm\Contascaract\Response\ConsultarCaractCRMContaResponse;
use OmieLib\Crm\Contascaract\Response\ExcluirCaractCRMContaResponse;
use OmieLib\Crm\Contascaract\Response\ExcluirTodasCaractCRMContaResponse;
use OmieLib\Crm\Contascaract\Response\IncluirCaractCRMContaResponse;

/**
 * Características da conta
 *
 * @pw_element string $campo Nome da característica.<BR><BR>Preenchimento obrigatório. <BR>Caso não encontre a característica um novo cadastro será adicionado.
 * @pw_element string $conteudo Conteúdo do característica.<BR><BR>Preenchimento obrigatório na inclusão. <BR><BR>Caso o valor desse campo não seja informado a característica <BR>será excluída da conta.
 * @pw_complex caracteristicas
 */
class Caracteristicas{
	/**
	 * Nome da característica.<BR><BR>Preenchimento obrigatório. <BR>Caso não encontre a característica um novo cadastro será adicionado.
	 *
	 * @var string
	 */
	public string $campo;
	/**
	 * Conteúdo do característica.<BR><BR>Preenchimento obrigatório na inclusão. <BR><BR>Caso o valor desse campo não seja informado a característica <BR>será excluída da conta.
	 *
	 * @var string
	 */
	public string $conteudo;
}
