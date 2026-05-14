<?php

namespace OmieLib\Servicos\Servico;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Servico\Request\SrvAssociarRequest;
use OmieLib\Servicos\Servico\Request\SrvConsultarRequest;
use OmieLib\Servicos\Servico\Request\SrvEditarRequest;
use OmieLib\Servicos\Servico\Request\SrvExcluirRequest;
use OmieLib\Servicos\Servico\Request\SrvIncluirRequest;
use OmieLib\Servicos\Servico\Request\SrvListarRequest;
use OmieLib\Servicos\Servico\Request\SrvUpsertRequest;
use OmieLib\Servicos\Servico\Response\SrvAssociarResponse;
use OmieLib\Servicos\Servico\Response\SrvConsultarResponse;
use OmieLib\Servicos\Servico\Response\SrvEditarResponse;
use OmieLib\Servicos\Servico\Response\SrvExcluirResponse;
use OmieLib\Servicos\Servico\Response\SrvIncluirResponse;
use OmieLib\Servicos\Servico\Response\SrvListarResponse;
use OmieLib\Servicos\Servico\Response\SrvUpsertResponse;

/**
 * NF Via Única (Modelo 21 e 22)
 *
 * @pw_element string $cUtilizaViaUnica Indica se o serviço utiliza Nota Fiscal Via Única (Modelos 21 e 22).<BR><BR>Pode ser:<BR>S - Sim<BR>N - Não
 * @pw_element string $cModeloNF Indica qual modelo de NF será emitida para o serviço.<BR><BR>Obrigatório quando a tag cUtilizaViaUnica for igual a "S".<BR><BR>Pode ser: <BR>21 - Nota Fiscal de Serviço de Comunicação<BR>22 - Nota Fiscal de Serviço de Telecomunicação
 * @pw_element string $cCFOP Código CFOP para NF Via Única (Modelos 21 e 22).<BR><BR>Obrigatório quando a tag cUtilizaViaUnica for igual a "S".<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API  /api/v1/produtos/cfop/ para obter essa informação.
 * @pw_element string $cClassifServico Código da Classificação para NF Via Única (Modelos 21 e 22).<BR><BR>Obrigatório quando a tag cUtilizaViaUnica for igual a "S".<BR><BR>Utilize a tag "cCodigo" do método "ListarClassificacaoServico" da API<BR>/api/v1/servicos/classificacaoservico/ para obter essa informação.<BR>
 * @pw_element string $cTipoReceita Indicador do Tipo de Receita para NF Via Única (Modelos 21 e 22).<BR><BR>Obrigatório quando a tag cUtilizaViaUnica for igual a "S".<BR><BR>Pode ser:<BR>0 - Receita própria - serviços prestados<BR>1 - Receita própria - cobrança de débitos<BR>2 - Receita própria - venda de mercadorias<BR>3 - Receita própria - venda de serviço pré-pago<BR>4 - Outras receitas próprias<BR>5 - Receitas de terceiros (co-faturamento)<BR>9 - Outras receitas de terceiros
 * @pw_element string $cTipoUtilizacao Código do tipo de utilização para NF Via Única (Modelos 21 e 22).<BR><BR>Obrigatório quando a tag cUtilizaViaUnica for igual a "S".<BR><BR>Utilize a tag "cCodigo" do método "ListarTipoUtilizacao" da API<BR>/api/v1/servicos/tipoutilizacao/ para obter essa informação.
 * @pw_complex viaUnica
 */
class ViaUnica{
	/**
	 * Indica se o serviço utiliza Nota Fiscal Via Única (Modelos 21 e 22).<BR><BR>Pode ser:<BR>S - Sim<BR>N - Não
	 *
	 * @var string
	 */
	public string $cUtilizaViaUnica;
	/**
	 * Indica qual modelo de NF será emitida para o serviço.<BR><BR>Obrigatório quando a tag cUtilizaViaUnica for igual a "S".<BR><BR>Pode ser: <BR>21 - Nota Fiscal de Serviço de Comunicação<BR>22 - Nota Fiscal de Serviço de Telecomunicação
	 *
	 * @var string
	 */
	public string $cModeloNF;
	/**
	 * Código CFOP para NF Via Única (Modelos 21 e 22).<BR><BR>Obrigatório quando a tag cUtilizaViaUnica for igual a "S".<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API  /api/v1/produtos/cfop/ para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCFOP;
	/**
	 * Código da Classificação para NF Via Única (Modelos 21 e 22).<BR><BR>Obrigatório quando a tag cUtilizaViaUnica for igual a "S".<BR><BR>Utilize a tag "cCodigo" do método "ListarClassificacaoServico" da API<BR>/api/v1/servicos/classificacaoservico/ para obter essa informação.<BR>
	 *
	 * @var string
	 */
	public string $cClassifServico;
	/**
	 * Indicador do Tipo de Receita para NF Via Única (Modelos 21 e 22).<BR><BR>Obrigatório quando a tag cUtilizaViaUnica for igual a "S".<BR><BR>Pode ser:<BR>0 - Receita própria - serviços prestados<BR>1 - Receita própria - cobrança de débitos<BR>2 - Receita própria - venda de mercadorias<BR>3 - Receita própria - venda de serviço pré-pago<BR>4 - Outras receitas próprias<BR>5 - Receitas de terceiros (co-faturamento)<BR>9 - Outras receitas de terceiros
	 *
	 * @var string
	 */
	public string $cTipoReceita;
	/**
	 * Código do tipo de utilização para NF Via Única (Modelos 21 e 22).<BR><BR>Obrigatório quando a tag cUtilizaViaUnica for igual a "S".<BR><BR>Utilize a tag "cCodigo" do método "ListarTipoUtilizacao" da API<BR>/api/v1/servicos/tipoutilizacao/ para obter essa informação.
	 *
	 * @var string
	 */
	public string $cTipoUtilizacao;
}
