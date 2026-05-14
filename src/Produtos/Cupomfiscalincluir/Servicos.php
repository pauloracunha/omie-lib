<?php

namespace OmieLib\Produtos\Cupomfiscalincluir;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfFecharCaixaRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirEcfRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirRpsRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirSatRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfInutilizarNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfFecharCaixaResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirEcfResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirNfceResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirRpsResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirSatResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfInutilizarNfceResponse;

/**
 * Informações dos Itens de serviço.
 *
 * @pw_element integer $nCodServ ID do serviço.  (Gerado internamente, não é visualizado na tela).<BR><BR>Pode ser obtido através da API 'api/v1/servicos/servico/#ListarCadastroServico'.<BR>
 * @pw_element integer $nItem Sequencia do item de serviço.
 * @pw_element decimal $nQtde Quantidade de serviços.
 * @pw_element decimal $nValorUni Valor Unitário do serviço.
 * @pw_element decimal $nValorTot Valor Total do serviço.
 * @pw_element string $cMunFG Código IBGE do município de ocorrência do fato gerador do ISSQN.<BR><BR>(Cidade de prestação do serviço).<BR>
 * @pw_element decimal $vAcresc Valor de acréscimo.
 * @pw_element decimal $vDesc Valor do desconto.
 * @pw_element decimal $nValorDed Valor dedução para redução da Base de Calculo.
 * @pw_element decimal $nValorCom Valor de comissão do vendedor - salão Parceiro.<BR><BR>Essa tag só deve ser informada na modalidade 'salão parceiro'.<BR><BR>(Obrigatória) se a Tag 'rps.cTipoAcao' for preenchida como 'AGRUPADO-SALAO-PARCEIRO.'<BR><BR>Obs. É um recurso exclusivo para atender a lei do salão parceiro nas emissões de NFS-e. Não tem relação com o valor de comissão do ERP.
 * @pw_element string $cCnpjVend CNPJ do vendedor - salão Parceiro.<BR><BR>Essa tag só deve ser informada na modalidade 'salão parceiro'.<BR><BR>(Obrigatória) se a Tag 'rps.cTipoAcao' for preenchida como 'AGRUPADO-SALAO-PARCEIRO.'<BR><BR>Obs. É um recurso exclusivo para atender a lei do salão parceiro nas emissões de NFS-e. Não tem relação com o cadastro de vendedores ou clientes do ERP.
 * @pw_element string $cNomeVend Nome do vendedor - salão Parceiro.<BR><BR>Essa tag só deve ser informada na modalidade 'salão parceiro'.<BR><BR>(Obrigatória) se a Tag 'rps.cTipoAcao' for preenchida como 'AGRUPADO-SALAO-PARCEIRO.'<BR><BR>Obs. É um recurso exclusivo para atender a lei do salão parceiro nas emissões de NFS-e. Não tem relação com o cadastro de vendedores ou clientes do ERP.
 * @pw_complex servicos
 */
class Servicos{
	/**
	 * ID do serviço.  (Gerado internamente, não é visualizado na tela).<BR><BR>Pode ser obtido através da API 'api/v1/servicos/servico/#ListarCadastroServico'.<BR>
	 *
	 * @var integer
	 */
	public int $nCodServ;
	/**
	 * Sequencia do item de serviço.
	 *
	 * @var integer
	 */
	public int $nItem;
	/**
	 * Quantidade de serviços.
	 *
	 * @var decimal
	 */
	public float $nQtde;
	/**
	 * Valor Unitário do serviço.
	 *
	 * @var decimal
	 */
	public float $nValorUni;
	/**
	 * Valor Total do serviço.
	 *
	 * @var decimal
	 */
	public float $nValorTot;
	/**
	 * Código IBGE do município de ocorrência do fato gerador do ISSQN.<BR><BR>(Cidade de prestação do serviço).<BR>
	 *
	 * @var string
	 */
	public string $cMunFG;
	/**
	 * Valor de acréscimo.
	 *
	 * @var decimal
	 */
	public float $vAcresc;
	/**
	 * Valor do desconto.
	 *
	 * @var decimal
	 */
	public float $vDesc;
	/**
	 * Valor dedução para redução da Base de Calculo.
	 *
	 * @var decimal
	 */
	public float $nValorDed;
	/**
	 * Valor de comissão do vendedor - salão Parceiro.<BR><BR>Essa tag só deve ser informada na modalidade 'salão parceiro'.<BR><BR>(Obrigatória) se a Tag 'rps.cTipoAcao' for preenchida como 'AGRUPADO-SALAO-PARCEIRO.'<BR><BR>Obs. É um recurso exclusivo para atender a lei do salão parceiro nas emissões de NFS-e. Não tem relação com o valor de comissão do ERP.
	 *
	 * @var decimal
	 */
	public float $nValorCom;
	/**
	 * CNPJ do vendedor - salão Parceiro.<BR><BR>Essa tag só deve ser informada na modalidade 'salão parceiro'.<BR><BR>(Obrigatória) se a Tag 'rps.cTipoAcao' for preenchida como 'AGRUPADO-SALAO-PARCEIRO.'<BR><BR>Obs. É um recurso exclusivo para atender a lei do salão parceiro nas emissões de NFS-e. Não tem relação com o cadastro de vendedores ou clientes do ERP.
	 *
	 * @var string
	 */
	public string $cCnpjVend;
	/**
	 * Nome do vendedor - salão Parceiro.<BR><BR>Essa tag só deve ser informada na modalidade 'salão parceiro'.<BR><BR>(Obrigatória) se a Tag 'rps.cTipoAcao' for preenchida como 'AGRUPADO-SALAO-PARCEIRO.'<BR><BR>Obs. É um recurso exclusivo para atender a lei do salão parceiro nas emissões de NFS-e. Não tem relação com o cadastro de vendedores ou clientes do ERP.
	 *
	 * @var string
	 */
	public string $cNomeVend;
}
