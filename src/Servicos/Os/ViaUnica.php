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
 * Informações referente ao serviço de NF modelo 21 ou 22.
 *
 * @pw_element string $cModeloNF Indica qual modelo de NF será emitida para o serviço.<BR><BR>Obrigatório quando a tag cEnvViaUnica for igual a "S".<BR><BR>Pode ser: <BR>21 - Nota Fiscal de Serviço de Comunicação<BR>22 - Nota Fiscal de Serviço de Telecomunicação
 * @pw_element string $cCFOP Código CFOP para NF Via Única (Modelos 21 e 22).<BR><BR>Obrigatório quando a tag cEnvViaUnica for igual a "S".<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API  /api/v1/produtos/cfop/ para obter essa informação.
 * @pw_element string $cClassifServico Código da Classificação para NF Via Única (Modelos 21 e 22).<BR><BR>Obrigatório quando a tag cEnvViaUnica for igual a "S".<BR><BR>Utilize a tag "cCodigo" do método "ListarClassificacaoServico" da API<BR>/api/v1/servicos/classificacaoservico/ para obter essa informação.<BR>
 * @pw_element string $cTipoReceita Indicador do Tipo de Receita para NF Via Única (Modelos 21 e 22).<BR><BR>Obrigatório quando a tag cEnvViaUnica for igual a "S".<BR><BR>Pode ser:<BR>0 - Receita própria - serviços prestados<BR>1 - Receita própria - cobrança de débitos<BR>2 - Receita própria - venda de mercadorias<BR>3 - Receita própria - venda de serviço pré-pago<BR>4 - Outras receitas próprias<BR>5 - Receitas de terceiros (co-faturamento)<BR>9 - Outras receitas de terceiros
 * @pw_element string $cTipoUtilizacao Código do tipo de utilização para NF Via Única (Modelos 21 e 22).<BR><BR>Obrigatório quando a tag cEnvViaUnica for igual a "S".<BR><BR>Utilize a tag "cCodigo" do método "ListarTipoUtilizacao" da API<BR>/api/v1/servicos/tipoutilizacao/ para obter essa informação.
 * @pw_complex viaUnica
 */
class ViaUnica{
	/**
	 * Indica qual modelo de NF será emitida para o serviço.<BR><BR>Obrigatório quando a tag cEnvViaUnica for igual a "S".<BR><BR>Pode ser: <BR>21 - Nota Fiscal de Serviço de Comunicação<BR>22 - Nota Fiscal de Serviço de Telecomunicação
	 *
	 * @var string
	 */
	public string $cModeloNF;
	/**
	 * Código CFOP para NF Via Única (Modelos 21 e 22).<BR><BR>Obrigatório quando a tag cEnvViaUnica for igual a "S".<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API  /api/v1/produtos/cfop/ para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCFOP;
	/**
	 * Código da Classificação para NF Via Única (Modelos 21 e 22).<BR><BR>Obrigatório quando a tag cEnvViaUnica for igual a "S".<BR><BR>Utilize a tag "cCodigo" do método "ListarClassificacaoServico" da API<BR>/api/v1/servicos/classificacaoservico/ para obter essa informação.<BR>
	 *
	 * @var string
	 */
	public string $cClassifServico;
	/**
	 * Indicador do Tipo de Receita para NF Via Única (Modelos 21 e 22).<BR><BR>Obrigatório quando a tag cEnvViaUnica for igual a "S".<BR><BR>Pode ser:<BR>0 - Receita própria - serviços prestados<BR>1 - Receita própria - cobrança de débitos<BR>2 - Receita própria - venda de mercadorias<BR>3 - Receita própria - venda de serviço pré-pago<BR>4 - Outras receitas próprias<BR>5 - Receitas de terceiros (co-faturamento)<BR>9 - Outras receitas de terceiros
	 *
	 * @var string
	 */
	public string $cTipoReceita;
	/**
	 * Código do tipo de utilização para NF Via Única (Modelos 21 e 22).<BR><BR>Obrigatório quando a tag cEnvViaUnica for igual a "S".<BR><BR>Utilize a tag "cCodigo" do método "ListarTipoUtilizacao" da API<BR>/api/v1/servicos/tipoutilizacao/ para obter essa informação.
	 *
	 * @var string
	 */
	public string $cTipoUtilizacao;
}
