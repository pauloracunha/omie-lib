<?php

namespace OmieLib\Produtos\Recebimentonfe;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarEtapaRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConsultarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoExcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoListarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoReverterRequest;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarEtapaResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConsultarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoExcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoListarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoReverterResponse;

/**
 * Informações do cadastro da NFe de recebimento
 *
 * @pw_element string $dInc Data da Inclusão.<BR>Preenchimento automático - Não informar.
 * @pw_element string $hInc Hora da Inclusão.<BR>Preenchimento automático - Não informar.
 * @pw_element string $cUsuarioInc Usuário da inclusão
 * @pw_element string $dAlt Data da Alteração.<BR>Preenchimento automático - Não informar.
 * @pw_element string $hAlt Hora da Alteração.<BR>Preenchimento automático - Não informar.
 * @pw_element string $cUsuarioAlt Usuário da alteração
 * @pw_element string $cFaturado Indica se a NFe foi faturada.<BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
 * @pw_element string $dFat Data do faturamento
 * @pw_element string $hFat Hora do faturamento
 * @pw_element string $cUsuarioFat Usuário do faturamento
 * @pw_element string $cDevolvido Indica se a NFe foi devolvida.<BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
 * @pw_element string $cDevolvidoParc Indica se a NFe foi devolvida parcialmente.<BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
 * @pw_element string $dDev Data da devolução da NFe
 * @pw_element string $hDev Hora da devolução da NFe
 * @pw_element string $cUsuarioDev Usuário da devolução da NFe
 * @pw_element string $cRecebido Indica se a NFe foi recebida.<BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
 * @pw_element string $dRec Data do recebimento da NFe
 * @pw_element string $hRec Hora do recebimento da NFe
 * @pw_element string $cUsuarioRec Usuário do recebimento da NFe
 * @pw_element string $cAutorizado Indica se a NFe foi autorizada.<BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
 * @pw_element string $cBloqueado Indica se a NFe foi bloqueada.<BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
 * @pw_element string $cCancelada Indica se a NFe foi cancelada.<BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
 * @pw_element string $dCanc Data de cancelamento da NFe
 * @pw_element string $hCanc Hora de cancelamento da NFe
 * @pw_element string $cUsuarioCanc Usuário do cancelamento da NFe
 * @pw_element string $cDenegado Indica se a NFe foi denegada.<BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
 * @pw_element string $cOperacao Indica o tipo de operacao de compra
 * @pw_complex infoCadastro
 */
class InfoCadastro{
	/**
	 * Data da Inclusão.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $dInc;
	/**
	 * Hora da Inclusão.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $hInc;
	/**
	 * Usuário da inclusão
	 *
	 * @var string
	 */
	public string $cUsuarioInc;
	/**
	 * Data da Alteração.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $dAlt;
	/**
	 * Hora da Alteração.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $hAlt;
	/**
	 * Usuário da alteração
	 *
	 * @var string
	 */
	public string $cUsuarioAlt;
	/**
	 * Indica se a NFe foi faturada.<BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
	 *
	 * @var string
	 */
	public string $cFaturado;
	/**
	 * Data do faturamento
	 *
	 * @var string
	 */
	public string $dFat;
	/**
	 * Hora do faturamento
	 *
	 * @var string
	 */
	public string $hFat;
	/**
	 * Usuário do faturamento
	 *
	 * @var string
	 */
	public string $cUsuarioFat;
	/**
	 * Indica se a NFe foi devolvida.<BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
	 *
	 * @var string
	 */
	public string $cDevolvido;
	/**
	 * Indica se a NFe foi devolvida parcialmente.<BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
	 *
	 * @var string
	 */
	public string $cDevolvidoParc;
	/**
	 * Data da devolução da NFe
	 *
	 * @var string
	 */
	public string $dDev;
	/**
	 * Hora da devolução da NFe
	 *
	 * @var string
	 */
	public string $hDev;
	/**
	 * Usuário da devolução da NFe
	 *
	 * @var string
	 */
	public string $cUsuarioDev;
	/**
	 * Indica se a NFe foi recebida.<BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
	 *
	 * @var string
	 */
	public string $cRecebido;
	/**
	 * Data do recebimento da NFe
	 *
	 * @var string
	 */
	public string $dRec;
	/**
	 * Hora do recebimento da NFe
	 *
	 * @var string
	 */
	public string $hRec;
	/**
	 * Usuário do recebimento da NFe
	 *
	 * @var string
	 */
	public string $cUsuarioRec;
	/**
	 * Indica se a NFe foi autorizada.<BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
	 *
	 * @var string
	 */
	public string $cAutorizado;
	/**
	 * Indica se a NFe foi bloqueada.<BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
	 *
	 * @var string
	 */
	public string $cBloqueado;
	/**
	 * Indica se a NFe foi cancelada.<BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
	 *
	 * @var string
	 */
	public string $cCancelada;
	/**
	 * Data de cancelamento da NFe
	 *
	 * @var string
	 */
	public string $dCanc;
	/**
	 * Hora de cancelamento da NFe
	 *
	 * @var string
	 */
	public string $hCanc;
	/**
	 * Usuário do cancelamento da NFe
	 *
	 * @var string
	 */
	public string $cUsuarioCanc;
	/**
	 * Indica se a NFe foi denegada.<BR><BR>Pode ser: <BR>S = Sim<BR>N = Não
	 *
	 * @var string
	 */
	public string $cDenegado;
	/**
	 * Indica o tipo de operacao de compra
	 *
	 * @var string
	 */
	public string $cOperacao;
}
