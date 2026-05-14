<?php

namespace OmieLib\Crm\Tarefas;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Tarefas\Request\TarefaAlterarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaConsultarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaEmailListarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaIncluirRequest;
use OmieLib\Crm\Tarefas\Request\TarefaListarRequest;
use OmieLib\Crm\Tarefas\Request\TarefaUpsertRequest;
use OmieLib\Crm\Tarefas\Response\TarefaAlterarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaConsultarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaEmailListarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaExcluirResponse;
use OmieLib\Crm\Tarefas\Response\TarefaIncluirResponse;
use OmieLib\Crm\Tarefas\Response\TarefaListarResponse;
use OmieLib\Crm\Tarefas\Response\TarefaUpsertResponse;

/**
 * Lista os cadastros de emails encontrados.
 *
 * @pw_element integer $nCodOp Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $nIdEmail ID do E-mail.
 * @pw_element string $dData Data da tarefa.
 * @pw_element string $cHora Hora da tarefa.
 * @pw_element string $cDescricao Descrição da tarefa.
 * @pw_element string $cImportante Indica que é uma atividade importante.
 * @pw_element string $cUrgente Indica que é uma atividade urgente.
 * @pw_element string $cEmailDe Email enviado de.
 * @pw_element string $cEmailPara Email enviado para.
 * @pw_element string $cEmailCopia Enviar cópia para.
 * @pw_element string $cEmailCopiaOculta Enviar cópia oculta para.
 * @pw_element string $cEmailDados Conteúdo do e-mail.
 * @pw_element string $cEmailOportunidade E-mail da Oportunidade.
 * @pw_element integer $nQtdeAnexos Quantidade de anexos.
 * @pw_element detalhesOportunidade $detalhesOportunidade Detalhes da Oportunidade.
 * @pw_complex cadastrosEmail
 */
class CadastrosEmail{
	/**
	 * Código da oportunidade.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodOp;
	/**
	 * ID do E-mail.
	 *
	 * @var string
	 */
	public string $nIdEmail;
	/**
	 * Data da tarefa.
	 *
	 * @var string
	 */
	public string $dData;
	/**
	 * Hora da tarefa.
	 *
	 * @var string
	 */
	public string $cHora;
	/**
	 * Descrição da tarefa.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Indica que é uma atividade importante.
	 *
	 * @var string
	 */
	public string $cImportante;
	/**
	 * Indica que é uma atividade urgente.
	 *
	 * @var string
	 */
	public string $cUrgente;
	/**
	 * Email enviado de.
	 *
	 * @var string
	 */
	public string $cEmailDe;
	/**
	 * Email enviado para.
	 *
	 * @var string
	 */
	public string $cEmailPara;
	/**
	 * Enviar cópia para.
	 *
	 * @var string
	 */
	public string $cEmailCopia;
	/**
	 * Enviar cópia oculta para.
	 *
	 * @var string
	 */
	public string $cEmailCopiaOculta;
	/**
	 * Conteúdo do e-mail.
	 *
	 * @var string
	 */
	public string $cEmailDados;
	/**
	 * E-mail da Oportunidade.
	 *
	 * @var string
	 */
	public string $cEmailOportunidade;
	/**
	 * Quantidade de anexos.
	 *
	 * @var integer
	 */
	public int $nQtdeAnexos;
	/**
	 * Detalhes da Oportunidade.
	 *
	 * @var DetalhesOportunidade
	 */
	public DetalhesOportunidade $detalhesOportunidade;
}
