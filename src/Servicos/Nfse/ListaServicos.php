<?php

namespace OmieLib\Servicos\Nfse;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nfse\Request\NfseListarRequest;
use OmieLib\Servicos\Nfse\Response\NfseListarResponse;

/**
 * Listas de itens da Nota Fiscal.
 *
 * @pw_element string $CidadePrestacao Cidade da Prestação de Serviços.
 * @pw_element string $CodigoLC116 Código da LC116.
 * @pw_element string $CodigoServico Código do Serviço no município.<BR>
 * @pw_element string $cCodigoObra Código da Obra.
 * @pw_element string $cCodigoART Código ART.
 * @pw_element string $cCodigoEncapsulamento Código do encapsulamento.
 * @pw_element decimal $nQuantidade Quantidade do Item
 * @pw_element decimal $nValorUnitario Valor Unitário do Item
 * @pw_element decimal $nValorServico Valor de Serviços
 * @pw_element decimal $nValorTotal Valor Total do Item
 * @pw_element decimal $nValorOutrasDespesas Valor (proporcional) de Outras Despesas Acessórias
 * @pw_element decimal $nDescontoValor Desconto em Valor
 * @pw_element decimal $nAliquotaISS Alíquota do ISS
 * @pw_element decimal $nValorISS Valor do ISS
 * @pw_element string $cRetISS Indica que o valor do ISS será retido pelo tomador do serviço
 * @pw_element decimal $nAliquotaIR Alíquota do IRRF
 * @pw_element decimal $nValorIR Valor do IRRF
 * @pw_element string $cRetIR Indica que o Valor do Imposto de Renda  informado deve ser retido
 * @pw_element decimal $nAliquotaPIS Alíquota do PIS
 * @pw_element decimal $nValorPIS Valor do PIS
 * @pw_element string $cRetPIS Indica que o Valor do PIS informado deve ser retido
 * @pw_element decimal $nAliquotaCOFINS Alíquota do COFINS
 * @pw_element decimal $nValorCOFINS Valor do COFINS
 * @pw_element string $cRetCOFINS Indica que o Valor do COFINS informado deve ser retido
 * @pw_element decimal $nAliquotaCSLL Alíquota do CSLL
 * @pw_element decimal $nValorCSLL Valor do CSLL
 * @pw_element string $cRetCSLL Indica que o Valor do CSLL informado deve ser retido
 * @pw_element decimal $nAliquotaINSS Alíquota do INSS
 * @pw_element decimal $nValorINSS Valor do INSS
 * @pw_element string $cRetINSS Indica que o Valor do INSS informado deve ser retido
 * @pw_element string $cDescricao Descrição do serviço.
 * @pw_complex ListaServicos
 */
class ListaServicos{
	/**
	 * Cidade da Prestação de Serviços.
	 *
	 * @var string
	 */
	public string $CidadePrestacao;
	/**
	 * Código da LC116.
	 *
	 * @var string
	 */
	public string $CodigoLC116;
	/**
	 * Código do Serviço no município.<BR>
	 *
	 * @var string
	 */
	public string $CodigoServico;
	/**
	 * Código da Obra.
	 *
	 * @var string
	 */
	public string $cCodigoObra;
	/**
	 * Código ART.
	 *
	 * @var string
	 */
	public string $cCodigoART;
	/**
	 * Código do encapsulamento.
	 *
	 * @var string
	 */
	public string $cCodigoEncapsulamento;
	/**
	 * Quantidade do Item
	 *
	 * @var decimal
	 */
	public float $nQuantidade;
	/**
	 * Valor Unitário do Item
	 *
	 * @var decimal
	 */
	public float $nValorUnitario;
	/**
	 * Valor de Serviços
	 *
	 * @var decimal
	 */
	public float $nValorServico;
	/**
	 * Valor Total do Item
	 *
	 * @var decimal
	 */
	public float $nValorTotal;
	/**
	 * Valor (proporcional) de Outras Despesas Acessórias
	 *
	 * @var decimal
	 */
	public float $nValorOutrasDespesas;
	/**
	 * Desconto em Valor
	 *
	 * @var decimal
	 */
	public float $nDescontoValor;
	/**
	 * Alíquota do ISS
	 *
	 * @var decimal
	 */
	public float $nAliquotaISS;
	/**
	 * Valor do ISS
	 *
	 * @var decimal
	 */
	public float $nValorISS;
	/**
	 * Indica que o valor do ISS será retido pelo tomador do serviço
	 *
	 * @var string
	 */
	public string $cRetISS;
	/**
	 * Alíquota do IRRF
	 *
	 * @var decimal
	 */
	public float $nAliquotaIR;
	/**
	 * Valor do IRRF
	 *
	 * @var decimal
	 */
	public float $nValorIR;
	/**
	 * Indica que o Valor do Imposto de Renda  informado deve ser retido
	 *
	 * @var string
	 */
	public string $cRetIR;
	/**
	 * Alíquota do PIS
	 *
	 * @var decimal
	 */
	public float $nAliquotaPIS;
	/**
	 * Valor do PIS
	 *
	 * @var decimal
	 */
	public float $nValorPIS;
	/**
	 * Indica que o Valor do PIS informado deve ser retido
	 *
	 * @var string
	 */
	public string $cRetPIS;
	/**
	 * Alíquota do COFINS
	 *
	 * @var decimal
	 */
	public float $nAliquotaCOFINS;
	/**
	 * Valor do COFINS
	 *
	 * @var decimal
	 */
	public float $nValorCOFINS;
	/**
	 * Indica que o Valor do COFINS informado deve ser retido
	 *
	 * @var string
	 */
	public string $cRetCOFINS;
	/**
	 * Alíquota do CSLL
	 *
	 * @var decimal
	 */
	public float $nAliquotaCSLL;
	/**
	 * Valor do CSLL
	 *
	 * @var decimal
	 */
	public float $nValorCSLL;
	/**
	 * Indica que o Valor do CSLL informado deve ser retido
	 *
	 * @var string
	 */
	public string $cRetCSLL;
	/**
	 * Alíquota do INSS
	 *
	 * @var decimal
	 */
	public float $nAliquotaINSS;
	/**
	 * Valor do INSS
	 *
	 * @var decimal
	 */
	public float $nValorINSS;
	/**
	 * Indica que o Valor do INSS informado deve ser retido
	 *
	 * @var string
	 */
	public string $cRetINSS;
	/**
	 * Descrição do serviço.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
