<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

/**
 * Mensagens de comunicação com a Prefeitura
 *
 * @pw_element string $cCodigo Código da mensagem de Erro/Aviso
 * @pw_element string $cDescricao Descrição da mensagem de erro/aviso.
 * @pw_element string $cCorrecao Correção da descrição de mensagem de erro/aviso.
 * @pw_element string $cSituacao Situação da mensagem.<BR><BR>Pode ser:<BR>ERRO<BR>ALERTA<BR>SUCESSO<BR><BR>Esse campo só é retornado quando a tag "lMsg" enviada na request é true.
 * @pw_element string $cAnexo Indica se a mensagem tem algum anexo (S/N).<BR><BR>Esse campo só é retornado quando a tag "lMsg" enviada na request é true.
 * @pw_element string $cUsuario Nome Completo do Usuário
 * @pw_element string $dData Data da mensagem.<BR><BR>Esse campo só é retornado quando a tag "lMsg" enviada na request é true.
 * @pw_element string $hHora Hora da mensagem.<BR><BR>Esse campo só é retornado quando a tag "lMsg" enviada na request é true.
 * @pw_complex mensagens
 */
class Mensagens{
	/**
	 * Código da mensagem de Erro/Aviso
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição da mensagem de erro/aviso.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Correção da descrição de mensagem de erro/aviso.
	 *
	 * @var string
	 */
	public string $cCorrecao;
	/**
	 * Situação da mensagem.<BR><BR>Pode ser:<BR>ERRO<BR>ALERTA<BR>SUCESSO<BR><BR>Esse campo só é retornado quando a tag "lMsg" enviada na request é true.
	 *
	 * @var string
	 */
	public string $cSituacao;
	/**
	 * Indica se a mensagem tem algum anexo (S/N).<BR><BR>Esse campo só é retornado quando a tag "lMsg" enviada na request é true.
	 *
	 * @var string
	 */
	public string $cAnexo;
	/**
	 * Nome Completo do Usuário
	 *
	 * @var string
	 */
	public string $cUsuario;
	/**
	 * Data da mensagem.<BR><BR>Esse campo só é retornado quando a tag "lMsg" enviada na request é true.
	 *
	 * @var string
	 */
	public string $dData;
	/**
	 * Hora da mensagem.<BR><BR>Esse campo só é retornado quando a tag "lMsg" enviada na request é true.
	 *
	 * @var string
	 */
	public string $hHora;
}
