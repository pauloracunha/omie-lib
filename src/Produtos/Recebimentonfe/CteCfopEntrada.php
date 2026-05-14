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
 * Dados da Aba "CFOP de Entrada e Mais Detalhes" do Recebimento de CT-e.
 *
 * @pw_element string $cCFOPEntrada CFOP de entrada.<BR><BR>Código Fiscal de Operações e Prestações.<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API<BR>/api/v1/produtos/cfop/ para obter essa informação.
 * @pw_complex cteCfopEntrada
 */
class CteCfopEntrada{
	/**
	 * CFOP de entrada.<BR><BR>Código Fiscal de Operações e Prestações.<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API<BR>/api/v1/produtos/cfop/ para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCFOPEntrada;
}
